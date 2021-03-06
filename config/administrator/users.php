<?php

return [
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Users',

    /**
    * The singular name of your model
    *
    * @type string
    */
    'single' => 'user',

    /**
    * The class name of the Eloquent model that this config represents
    *
    * @type string
    */
    'model' => '\App\User',

    /**
    * The columns array
    *
    * @type array
    */
    'columns' => [
        'id' => [
            'title' => 'ID'
        ],
        'name' => [
            'title' => 'Name',
        ],
//        'slug' => [
//            'title' => 'Slug',
//        ],
        'email' => [
            'title' => 'Email',
        ],
//        'password' => [
//            'title' => 'Password',
//        ],
//        'confirmed' => [
//            'title' => 'Confirmed',
//        ],
//        'confirmation_code' => [
//            'title' => 'Confirmation code',
//        ],
//        'provider' => [
//            'title' => 'Provider',
//        ],
//        'provider_id' => [
//            'title' => 'Provider ID',
//        ],
//        'remember_token' => [
//            'title' => 'Remember token',
//        ],
        'roles' => [
            'title' => 'Roles',
            'relationship' => 'roles',
            'select' => "GROUP_CONCAT((:table).name)"
        ],
        'created_at' => [
            'title' => 'Created at',
        ],
        'updated_at' => [
            'title' => 'Updated at',
        ],
    ],

    /**
    * The edit fields array
    *
    * @type array
    */
    'edit_fields' => [
        'name' => [
            'title' => 'Name',
            'type' => 'text'
        ],
        'email' => [
            'title' => 'Email',
            'type' => 'text'
        ],
        'password' => [
            'title' => 'Password',
            'type' => 'password',
        ],
        'roles' => [
            'title' => 'Roles',
            'type' => 'relationship',
            'name_field' => 'name'
        ],
    ],

    /**
    * The filter fields
    *
    * @type array
    */
    'filters' => [
        'id' => [
            'title' => 'ID'
        ],
        'name' => [
            'title' => 'Name',
        ],
        'email' => [
            'title' => 'Email',
            'type' => 'text'
        ],
        'roles' => [
            'title' => 'Roles',
            'type' => 'relationship',
            'name_field' => 'name'
        ],
        'created_at' => [
            'title' => 'Created at',
            'type' => 'date',
        ],
        'updated_at' => [
            'title' => 'Updated at',
            'type' => 'date',
        ],
    ],

    /**
    * The query filter option lets you modify the query parameters before Administrator begins to construct the query. For example, if you want
    * to have one page show only deleted items and another page show all of the items that aren't deleted, you can use the query filter to do
    * that.
    *
    * @type closure
    */
    'query_filter'=> function($query) {
//        if (!Auth::user()->hasRole('super_admin')) {
//            $query->whereDeleted(false);
//        }

        //hacky fix to hash non-hashed passwords of today's newly created users
        $todayStart = \Carbon\Carbon::today()->startOfDay();
        $todayEnd = \Carbon\Carbon::today()->endOfDay();
        $users = \App\User::whereBetween('updated_at',[$todayStart,$todayEnd])->get();

        foreach($users as $user) {
            if(\Illuminate\Support\Facades\Hash::needsRehash($user->password)) {
                $user->password = bcrypt($user->password);
                $user->save();
            }
        }
    },

    /**
     * The permission option is the per-model authentication check that lets you define a closure that should return true if the current user
     * is allowed to view this model. Any "falsey" response will result in a 404.
     *
     * @type closure
     */
    'permission'=> function() {
        return Auth::user()->may('manage-users');
    },

//    /**
//     * The action_permissions option lets you define permissions on the four primary config: 'create', 'update', 'delete', and 'view'.
//     * It also provides a secondary place to define permissions for your custom config.
//     *
//     * @type array
//     */
//    'action_permissions'=> [
//        'create' => function($model) {
//            return Auth::user()->has_role('developer');
//        }
//        'update' => function($model) {
//            return Auth::user()->has_role('developer');
//        }
//        'delete' => function($model) {
//            return Auth::user()->has_role('developer');
//        }
//        'view' => function($model) {
//            return Auth::user()->has_role('developer');
//        }
//    ],

//    /**
//     * This is where you can define the model's custom config
//     */
//    'config' => [
//        //Ordering an item up
//        'order_up' => [
//            'title' => 'Order Up',
//            'messages' => [
//                'active' => 'Reordering...',
//                'success' => 'Reordered',
//                'error' => 'There was an error while reordering',
//            ],
//            'permission' => function($model) {
//                return $model->category_id !== 2;
//            },
//            //the model is passed to the closure
//            'action' => function($model) {
//                //get all the items of this model and reorder them
//                $model->orderUp();
//            }
//        ],
      //Ordering an item down
//    ],

//    /**
//     * This is where you can define the model's global custom config
//     */
//    'global_actions' => [
//        //Create Excel Download
//        'download_excel' => [
//            'title' => 'Download XLS',
//            'messages' => [
//                'active' => 'Creating the spreadsheet...',
//                'success' => 'Spreadsheet created! Downloading now...',
//                'error' => 'There was an error while creating the spreadsheet',
//            ],
//            //the Eloquent query builder is passed to the closure
//            'action' => function($query) {
//                //get all the rows for this query
//                $result = $query->get();
//
//                //do something to put it into excel
//
//                //return a download response
//                return Response::download($filePath);
//            }
//        ],
//    ],

    /**
    * The validation rules for the form, based on the Laravel validation class
    *
    * @type array
    */
    'rules' => [
        'password' => 'sometimes|required|min:6',
    ],

//    /**
//     * The validation messages for the form, based on the Laravel validation class
//     *
//     * @type array
//     */
//    'messages' => [
//        'name.required' => 'The name field is required',
//        'age.min' => 'The minimum age is 18 years old',
//    ],

//    /**
//     * The sort options for a model
//     *
//     * @type array
//     */
//    'sort' => [
//        'field' => 'name',
//        'direction' => 'asc',
//    ],

//    /**
//     * The width of the model's edit form
//     *
//     * @type int
//     */
//    'form_width' => 400,

//    /**
//     * If provided, this is run to construct the front-end link for your model
//     *
//     * @type function
//     */
//    'link' => function($model) {
//        return URL::route('product', array($model->collection()->first()->uri, $model->uri));
//    }

];
