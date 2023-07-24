<?php
        namespace App\Http\Controllers\Back\Menu;
        use Illuminate\Http\Request;
        use App\Http\Controllers\Controller;
        use App\Models\Menu;
        use DB;
        use Hash;
        use Illuminate\Support\Arr;

        class MenuController extends Controller
        {
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function index(Request $request)
            {
                $data = Menu::orderBy("id","DESC")->get();
                return view("back.Menu.index",compact("data"))
                    ->with("i", ($request->input("page", 1) - 1) * 5);
            }
        
            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function create()
            {
                return view("back.Menu.create");
            }
        
        
        
            /**
             * Store a newly created resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @return \Illuminate\Http\Response
             */
        
            public function store(Request $request)
            {
               
                    
                $input = $request->all();
                
                
                $Menu = Menu::create($input);
               
            
                return redirect()->route("menu.index")
                ->with("success","Menu created successfully");
            
            }
        
        
            /**
                 * Display the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
        
                public function show($id)
                {
                    $Menu = Menu::find($id);
                    return view("back.Menu.show",compact("Menu"));
                }
            

            
                /**
                 * Show the form for editing the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function edit($id)
                {
                    $Menu = Menu::find($id);
                    return view("back.Menu.edit",compact("Menu"));
                }
            

            
                /**
                 * Update the specified resource in storage.
                 *
                 * @param  \Illuminate\Http\Request  $request
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function update(Request $request, $id)
                {
                
                   
                        
                        

                    $input = $request->all();

                    
                    
                    
                    $Menu = Menu::find($id);
                    $Menu->update($input);
                
                    return redirect()->route("menu.index")
                    ->with("success","Menu updated successfully");
                
                }
            

                /**
                 * Remove the specified resource from storage.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function destroy($id)
                {
                    Menu::find($id)->delete();
                    return redirect()->route("menu.index")
                    ->with("success","Menu deleted successfully");
                
                }
            }
        
        ?>