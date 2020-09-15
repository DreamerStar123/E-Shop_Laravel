@extends('admin.admin_layouts')

 

@section('admin_content')
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Product Section</span>
      </nav>

      <div class="sl-pagebody">


 <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Product Details Page  </h6>
           
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label><br>
                 <strong>{{ $product->product_name }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label><br>
                 <strong>{{ $product->product_code }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->product_quantity }}</strong>
                  
                </div>
              </div><!-- col-4 -->
               
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->category_name }}</strong>
       
                </div>
              </div><!-- col-4 -->


              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->subcategory_name }}</strong>
       
                </div>
              </div><!-- col-4 -->



              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
          <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
               <br>
                  <strong>{{ $product->brand_name }}</strong>
                </div>
              </div><!-- col-4 -->


<div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label>
                    <br>
                  <strong>{{ $product->product_size }}</strong>
                </div>
              </div><!-- col-4 -->

<div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Color: <span class="tx-danger">*</span></label>
                    <br>
                  <strong>{{ $product->product_color }}</strong>
 
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                  <br>
                  <strong>{{ $product->selling_price }}</strong>
                 
                </div>
              </div><!-- col-4 -->


               <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product Details: <span class="tx-danger">*</span></label>
                  <br>
                 <p>   {!! $product->product_details !!} </p>
    
                </div>
              </div><!-- col-4 -->

                <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Video Link: <span class="tx-danger">*</span></label>
                  <br>
                  <strong>{{ $product->video_link }}</strong>
                   
                </div>
              </div><!-- col-4 -->



 <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image One ( Main Thumbnali): <span class="tx-danger">*</span></label><br>
                 <label class="custom-file">
           
            <img src="{{ URL::to($product->image_one) }}" style="height: 80px; width: 80px;">
            </label>

                </div>
              </div><!-- col-4 -->


               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Two: <span class="tx-danger">*</span></label><br>
                 <label class="custom-file">
           <img src="{{ URL::to($product->image_two) }}" style="height: 80px; width: 80px;">
            </label>

                </div>
              </div><!-- col-4 -->




 <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Three: <span class="tx-danger">*</span></label><br>
                 <label class="custom-file">
           <img src="{{ URL::to($product->image_three) }}" style="height: 80px; width: 80px;">

            </label>

                </div>
              </div><!-- col-4 --> 

            </div><!-- row -->

  <hr>
  <br><br>

          <div class="row">

        <div class="col-lg-4">
        <label class="">
         @if($product->main_slider == 1)
         <span class="badge badge-success">Active</span>

         @else
       <span class="badge badge-danger">Inactive</span>
         @endif 

          <span>Main Slider</span>
        </label>

        </div> <!-- col-4 --> 

         <div class="col-lg-4">
        <label class="">
         @if($product->hot_deal == 1)
         <span class="badge badge-success">Active</span>

         @else
       <span class="badge badge-danger">Inactive</span>
         @endif 
          
          <span>Hot Deal</span>
        </label>

        </div> <!-- col-4 --> 



         <div class="col-lg-4">
       <label class="">
         @if($product->best_rated == 1)
         <span class="badge badge-success">Active</span>

         @else
       <span class="badge badge-danger">Inactive</span>
         @endif 
          
          <span>Best Rated</span>
        </label>

        </div> <!-- col-4 --> 


         <div class="col-lg-4">
       <label class="">
         @if($product->trend == 1)
         <span class="badge badge-success">Active</span>

         @else
       <span class="badge badge-danger">Inactive</span>
         @endif 
        
          <span>Trend Product </span>
        </label>

        </div> <!-- col-4 --> 

 <div class="col-lg-4">
        <label class="">
         @if($product->mid_slider == 1)
         <span class="badge badge-success">Active</span>

         @else
       <span class="badge badge-danger">Inactive</span>
         @endif 
          
          <span>Mid Slider</span>
        </label>

        </div> <!-- col-4 --> 

<div class="col-lg-4">
       <label class="">
         @if($product->hot_new == 1)
         <span class="badge badge-success">Active</span>

         @else
       <span class="badge badge-danger">Inactive</span>
         @endif 
          
          <span>Hot New </span>
        </label>

        </div> <!-- col-4 --> 
 

          </div><!-- end row --> 
 
 

            
          </div><!-- form-layout -->
        </div><!-- card -->
 
        
        </div><!-- row -->

  
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
 
 

 

 
@endsection

