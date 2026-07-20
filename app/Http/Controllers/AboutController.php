<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    // Show the edit form (single record — create one if none exists)
    public function about()
    {
        $data['about_data'] = AboutUs::first();

        return view('admin.about.about_store', $data);
    }


    // Store / Update About Us content
    public function aboutStore(Request $request)
    {
        $about = AboutUs::first();

        if (!$about) {
            $about = new AboutUs();
        }

        // ===== Simple text fields =====
        $about->story_description = $request->story_description;
        $about->mission_description = $request->mission_description;
        $about->vision_description = $request->vision_description;

        for ($i = 1; $i <= 4; $i++) {
            $about->{"stat{$i}_number"} = $request->{"stat{$i}_number"};
            $about->{"stat{$i}_label"} = $request->{"stat{$i}_label"};
        }

        for ($i = 1; $i <= 4; $i++) {
            $about->{"journey{$i}_description"} = $request->{"journey{$i}_description"};
        }

        // ===== Story Image Upload =====
        if ($request->hasFile('story_image')) {

            if ($about->story_image && File::exists(public_path($about->story_image))) {
                File::delete(public_path($about->story_image));
            }

            $file = $request->file('story_image');
            $filename = 'story_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/about'), $filename);

            $about->story_image = 'uploads/about/' . $filename;
        }

        // ===== Stat Icons Upload (4) =====
        for ($i = 1; $i <= 4; $i++) {

            $field = "stat{$i}_icon";

            if ($request->hasFile($field)) {

                if ($about->{$field} && File::exists(public_path($about->{$field}))) {
                    File::delete(public_path($about->{$field}));
                }

                $file = $request->file($field);
                $filename = "stat{$i}_" . time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/about'), $filename);

                $about->{$field} = 'uploads/about/' . $filename;
            }
        }

        // ===== Journey Icons Upload (4) =====
        for ($i = 1; $i <= 4; $i++) {

            $field = "journey{$i}_icon";

            if ($request->hasFile($field)) {

                if ($about->{$field} && File::exists(public_path($about->{$field}))) {
                    File::delete(public_path($about->{$field}));
                }

                $file = $request->file($field);
                $filename = "journey{$i}_" . time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/about'), $filename);

                $about->{$field} = 'uploads/about/' . $filename;
            }
        }

        $about->save();

        return redirect()->route('about')
            ->with('success', 'About Us Updated Successfully');
    }
}
