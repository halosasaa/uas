<?php
        namespace App\Http\Controllers\Back\Karyawan;
        use Illuminate\Http\Request;
        use App\Http\Controllers\Controller;
        use App\Models\Karyawan;
        use DB;
        use Hash;
        use Illuminate\Support\Arr;

        class KaryawanController extends Controller
        {
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function index(Request $request)
            {
                $data = Karyawan::orderBy("id","DESC")->get();
                return view("back.Karyawan.index",compact("data"))
                    ->with("i", ($request->input("page", 1) - 1) * 5);
            }
        
            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function create()
            {
                return view("back.Karyawan.create");
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
                
                
                $Karyawan = Karyawan::create($input);
               
            
                return redirect()->route("karyawan.index")
                ->with("success","Karyawan created successfully");
            
            }
        
        
            /**
                 * Display the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
        
                public function show($id)
                {
                    $Karyawan = Karyawan::find($id);
                    return view("back.Karyawan.show",compact("Karyawan"));
                }
            

            
                /**
                 * Show the form for editing the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function edit($id)
                {
                    $Karyawan = Karyawan::find($id);
                    return view("back.Karyawan.edit",compact("Karyawan"));
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

                    
                    
                    
                    $Karyawan = Karyawan::find($id);
                    $Karyawan->update($input);
                
                    return redirect()->route("karyawan.index")
                    ->with("success","Karyawan updated successfully");
                
                }
            

                /**
                 * Remove the specified resource from storage.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function destroy($id)
                {
                    Karyawan::find($id)->delete();
                    return redirect()->route("karyawan.index")
                    ->with("success","Karyawan deleted successfully");
                
                }
            }
        
        ?>