<?php
        namespace App\Http\Controllers\Back\Jenis_menu;
        use Illuminate\Http\Request;
        use App\Http\Controllers\Controller;
        use App\Models\Jenis_menu;
        use DB;
        use Hash;
        use Illuminate\Support\Arr;

        class Jenis_menuController extends Controller
        {
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function index(Request $request)
            {
                $data = Jenis_menu::orderBy("id","DESC")->get();
                return view("back.Jenis_menu.index",compact("data"))
                    ->with("i", ($request->input("page", 1) - 1) * 5);
            }
        
            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function create()
            {
                return view("back.Jenis_menu.create");
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
                
                
                $Jenis_menu = Jenis_menu::create($input);
               
            
                return redirect()->route("jenis_menu.index")
                ->with("success","Jenis_menu created successfully");
            
            }
        
        
            /**
                 * Display the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
        
                public function show($id)
                {
                    $Jenis_menu = Jenis_menu::find($id);
                    return view("back.Jenis_menu.show",compact("Jenis_menu"));
                }
            

            
                /**
                 * Show the form for editing the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function edit($id)
                {
                    $Jenis_menu = Jenis_menu::find($id);
                    return view("back.Jenis_menu.edit",compact("Jenis_menu"));
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

                    
                    
                    
                    $Jenis_menu = Jenis_menu::find($id);
                    $Jenis_menu->update($input);
                
                    return redirect()->route("jenis_menu.index")
                    ->with("success","Jenis_menu updated successfully");
                
                }
            

                /**
                 * Remove the specified resource from storage.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function destroy($id)
                {
                    Jenis_menu::find($id)->delete();
                    return redirect()->route("jenis_menu.index")
                    ->with("success","Jenis_menu deleted successfully");
                
                }
            }
        
        ?>