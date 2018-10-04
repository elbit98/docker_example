<?php

namespace Modules\Users\Repositories;

use Modules\Users\Entities\User;

class UserRepository
{

    public function create($request)
    {

        $user = new User;
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

//        $user = User::create($data);

        return $user;
    }


    /**
     * @param User $user
     * @param string $password
     * @return bool
     */
    public function editPassword($user, string $password)
    {
        $user->password = $password;

        return $user->save();
    }

    public function editFullName($user, string $full_name)
    {
        $user->full_name = $full_name;

        return $user->save();
    }

    public function editImage($user, $image) {

//        if (($request->hasFile('file'))) {
//            $destinationPath = 'uploads/files'; // upload path
//            $extension = $request->file('file')->getClientOriginalExtension(); // getting image extension
//
//            $tempName = $request->file("file")->getClientOriginalName();
//            $fileName = uniqid("MW") . '.' . $extension; // renameing image
//            $request->file('file')->move($destinationPath, $fileName); // uploading file to given path
//            // sending back with message
//            $imagepath = $destinationPath.'/'.$fileName;
//
//
//        }

    }


}