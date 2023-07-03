<?php

namespace App\Services;
use Illuminate\Support\Facades\File;
use App\Models\Image;
use Intervention\Image\Facades\Image as InterventionImage;


class ImageService
{

    public function store($model, $image, $savePath, $resize = false,$h,$w)
    {
        if(!empty($image)){
            $imageName =  $this->moveImage($image , $savePath, $resize,$h,$w);
            $model->image()->save( new Image(['image_name' => $imageName, 'image_location' => $savePath]));
        }
        return;
    }

    public function update($model, $image, $savePath , $resize = false, $h, $w){

        if(!empty($image)){
        $previousImage = $model->image()->first();
        if(!empty($previousImage))
        {
            $imageName = $this->moveImage($image,$savePath , $resize,$h,$w);
            $this->unlinkImage($previousImage);
            $previousImage->image_name = $imageName;
            $previousImage->save();
        }
        else{
            $this->store($model,$image,$savePath , $resize);
        }
        }

    }

    public function destroy($model){
        $model->delete();
        $imageLocation = $model->image->image_location;
        $imageName = $model->image->image_name;
        $imagePath = public_path($imageLocation.'/'.$imageName);
        File::delete($imagePath);
    }


    private function moveImage($image , $path , $resize,$h,$w)
    {
        $imageName = time().'.'.$image->extension();
        if($resize){
        $image =  InterventionImage::make($image);
        $image->resize($h,$w);
        $image->save(public_path($path).'/'.$imageName,100);
        }
        else{
            $image->move(public_path($path),$imageName);
        }

        return $imageName;
    }

    private function unlinkImage($image)
    {
        $imagePath = public_path($image->image_location.'/'.$image->image_name);
        File::delete($imagePath);
        return;
    }


}
