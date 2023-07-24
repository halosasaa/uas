<?php
        namespace App\Http\Controllers\Back\Pembeli;
        use Illuminate\Http\Request;
        use App\Http\Controllers\Controller;
        use App\Models\Pembeli;
        use DB;
        use Hash;
        use Illuminate\Support\Arr;

        class PembeliController extends Controller
        {
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function index(Request $request)
            {
                $data = Pembeli::orderBy("id","DESC")->get();
                return view("back.Pembeli.index",compact("data"))
                    ->with("i", ($request->input("page", 1) - 1) * 5);
            }
        
            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function create()
            {
                return view("back.Pembeli.create");
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
                
                
                $Pembeli = Pembeli::create($input);
               
            
                return redirect()->route("pembeli.index")
                ->with("success","Pembeli created successfully");
            
            }
        
        
            /**
                 * Display the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
        
                public function show($id)
                {
                    $Pembeli = Pembeli::find($id);
                    return view("back.Pembeli.show",compact("Pembeli"));
                }
            

            
                /**
                 * Show the form for editing the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function edit($id)
                {
                    $Pembeli = Pembeli::find($id);
                    return view("back.Pembeli.edit",compact("Pembeli"));
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

                    
                    
                    
                    $Pembeli = Pembeli::find($id);
                    $Pembeli->update($input);
                
                    return redirect()->route("pembeli.index")
                    ->with("success","Pembeli updated successfully");
                
                }
            

                /**
                 * Remove the specified resource from storage.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function destroy($id)
                {
                    Pembeli::find($id)->delete();
                    return redirect()->route("pembeli.index")
                    ->with("success","Pembeli deleted successfully");
                
                }
            }
        
        ?>