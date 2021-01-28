<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvatarRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Plank\Mediable\Exceptions\MediaUpload\ConfigurationException;
use Plank\Mediable\Exceptions\MediaUpload\FileExistsException;
use Plank\Mediable\Exceptions\MediaUpload\FileNotFoundException;
use Plank\Mediable\Exceptions\MediaUpload\FileNotSupportedException;
use Plank\Mediable\Exceptions\MediaUpload\FileSizeException;
use Plank\Mediable\Facades\MediaUploader;
use Plank\Mediable\Media;

class ImageControllerApi extends Controller
{

    public function uploadAvatar (AvatarRequest $request) {
        $user = User::find(auth()->user()->id);
        try {
            $media = MediaUploader::fromSource($request->file('avatar'))
                ->toDirectory('temp')
                ->upload();
        } catch (ConfigurationException $e) {
            return redirect()->route('profile.index')
                ->with('status', 'Problem with image upload contact with admin')
                ->with('color', 'alert-danger');
        } catch (FileExistsException $e) {
            return redirect()->route('profile.index')
                ->with('status', 'File exists')
                ->with('color', 'alert-danger');
        } catch (FileNotFoundException $e) {
            return redirect()->route('profile.index')
                ->with('status', 'File not found')
                ->with('color', 'alert-danger');
        } catch (FileNotSupportedException $e) {
            return redirect()->route('profile.index')
                ->with('status', 'Not supported extension')
                ->with('color', 'alert-danger');
        } catch (FileSizeException $e) {
            return redirect()->route('profile.index')
                ->with('status', 'Image is too big')
                ->with('color', 'alert-danger');
        }

        if(!$user->hasMedia('avatar')){
            $media->move('img/'.auth()->user()->id.'/avatar');
            $user->attachMedia($media, 'avatar');
        } else {
            foreach($user->getMedia('avatar') as $avatar) {
                $avatar->delete();
            }
            $media->move('img/'.auth()->user()->id.'/avatar');
            $user->syncMedia($media, 'avatar');
        }

        return response(json_encode(['status' => 'ok']),200);
    }
}
