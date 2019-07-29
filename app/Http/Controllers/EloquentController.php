<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class EloquentController extends Controller
{
    //


    /**
     * @return 0|array
     */

    //take and chunk method
    public function check()
    {
        $collection = collect(['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5]);
        //return $collection->take(2);
        //return $collection->take(-2);
        //return $collection->take(-3);
        //return $collection->chunk(3);


    }


//    protected function take($collection, $limit)
//    {
//        //return array_slice($collection->toArray(),$limit,2);
//
//
//
//        if($limit<0)
//        {
//            return array_slice($collection->toArray(),$limit,abs($limit));
//
//        }
//        else
//        {
//            return array_slice($collection->toArray(),0,$limit);
//
//        }


//        $index=0;
//        $take=[];
//        foreach($collection as $key=>$value)
//        {
//            if($index<$limit)
//            {
//                $take[$key]=$value;
//            }
//            $index++;
//
//        }
//        return $take;
//    }
    // }


    //for cheeck 2
    public function check2()
    {
//        $users=User::where(['isAdmin'=>1,'name'=>'Mr. Emanuel Price'])->get();
        // $users=User::all();
        //return $users->where('isAdmin','>',0)->where('name','=','Mr. Emanuel Price');
        //return $users->whereIn('id',[1,2,3]);
        //$collection= $users->whereNotIn('id',[1,2,3]);
        //dd($collection->contains('name','Jerel Zulauf'));

        //return $users->where('isAdmin',0)->take(1);
//        return $users->where('isAdmin',0)->first();
        // return $users->firstwhere('isAdmin',0);

    }

    //for short
    public function short()
    {

        $user = User::all();
//       return $user->sortBy('name',0,true)->values();
//        return $user->sortByDesc('name')->values();
        return collect($user->first())->sortKeys();


    }


    //for Map
    public function map()
    {
//
//        $users=User::all();
////       return $user->sortBy('name',0,true)->values();
////        return $user->sortByDesc('name')->values();
//        //return collect($user->first())->sortKeys();
//        return $users->map(function ($user)
//        {
//           // return ['name'=>$user->name,'id'=>$user->id];
////            if($user->isAdmin==1)
////            {
////                $user->email_confirmed=1;
////            }
//            //return $user->only('name','email');
//
//            $users=User::all();
//             $users->each(function ($user)
//            {
//                if ($user->id==14)
//                {
//                    return false;
//                }
//                print ($user->id);echo "</br>";
//            });
//
//
//        });


    }


//    public function  merge()
//    {
//        $user=User::first();
////        return collect($user)->merge([
////
////
////            'name'=>'jubayer',
////            'abc'=>'cde'
////
////
////
////
////        ]);
//        $collection= collect(['john Doe','name'=>'sarthak','ankur']);
//
//        $concatenated=$collection->concat(['jane Doe'])->concat(['name'=>'johny Doe']);
//        return $concatenated->all();
//
//
//
//
//
//
//    }

//public function groupBy()
//{
////$users=User::all();
////return $users->groupBy(function ($item,$key)
////{
////    return substr($item['email'],-4);
////
////},true);
////}
//
//
//    $data = new Collection([
//        10 => ['user' => 1, 'skill' => 1, 'roles' => ['Role_1', 'Role_3']],
//        20 => ['user' => 2, 'skill' => 1, 'roles' => ['Role_1', 'Role_2']],
//        30 => ['user' => 3, 'skill' => 2, 'roles' => ['Role_1']],
//        40 => ['user' => 4, 'skill' => 2, 'roles' => ['Role_2']],
//    ]);
//
//    return $data->groupBy([
//        'skill',
//        function ($item) {
//            return $item['roles'];
//        },
//    ], $preserveKeys = true);
//
//
//
//
//
//}
//
//
//}



//public function pop()
//{
//    $users=User::all();
//   //$popItem= $users->pop();
//    //$pullItem=$users->pull(2);
//   //return $pullItem;
//   //$forgetItem=$users->forget(2);
//    //return $forgetItem;
//
////    $forgetItem=$users->forget(2)->map(function ($user){
////
////        return $user->only('name','id');
////
////    });
////    return $forgetItem;
//
//    $result=$users->every(function ($users)
//    {
//        return $users->isAdmin!=='';
//    });
//dd($result);
//
//
//
//}


}
