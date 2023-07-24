<?php
        namespace App\Http\Controllers\Back\Pembelian;
        use Illuminate\Http\Request;
        use App\Http\Controllers\Controller;
        use App\Models\Pembelian;
        use DB;
        use Hash;
        use Illuminate\Support\Arr;

        class PembelianController extends Controller
        {
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function index(Request $request)
            {
                $data = Pembelian::orderBy("id","DESC")->get();
                return view("back.Pembelian.index",compact("data"))
                    ->with("i", ($request->input("page", 1) - 1) * 5);
            }
        
            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function create()
            {
                return view("back.Pembelian.create");
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
                
                
                $Pembelian = Pembelian::create($input);
               
            
                return redirect()->route("pembelian.index")
                ->with("success","Pembelian created successfully");
            
            }
        
        
            /**
                 * Display the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
        
                public function show($id)
                {
                    $Pembelian = Pembelian::find($id);
                    return view("back.Pembelian.show",compact("Pembelian"));
                }
            

            
                /**
                 * Show the form for editing the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function edit($id)
                {
                    $Pembelian = Pembelian::find($id);
                    return view("back.Pembelian.edit",compact("Pembelian"));
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

                    
                    
                    
                    $Pembelian = Pembelian::find($id);
                    $Pembelian->update($input);
                
                    return redirect()->route("pembelian.index")
                    ->with("success","Pembelian updated successfully");
                
                }
            

                /**
                 * Remove the specified resource from storage.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function destroy($id)
                {
                    Pembelian::find($id)->delete();
                    return redirect()->route("pembelian.index")
                    ->with("success","Pembelian deleted successfully");
                
                }
            }
        
        ?>