@extends('admin.admin_layouts')

 

@section('admin_content')
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Admin Section</span>
      </nav>

      <div class="sl-pagebody">

 
 <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">New Admin   </h6>
          <p class="mg-b-20 mg-sm-b-30">New Admin Add From</p>

       <form method="post" action="{{ route('update.admin') }}" >    
        @csrf

       <input type="hidden" name="id" value="{{ $user->id }}"> 

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label"> Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name"  placeholder="Enter User Name" required="" value="{{ $user->name }}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="phone"  placeholder="Enter Phone" required="" value="{{ $user->phone }}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="email" name="email"  placeholder="Enter Your Email" required="" value="{{ $user->email }}">
                </div>
              </div><!-- col-4 -->

 
                
 

            </div><!-- row -->

  <hr>
  <br><br>

          <div class="row">

        <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="category" value="1" <?php if ($user->category == 1) {
           echo "checked"; }  ?> >
          <span>Category</span>
        </label>

        </div> <!-- col-4 --> 

         <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="coupon" value="1" <?php if ($user->coupon == 1) {
           echo "checked"; }  ?> >
          <span>Coupon</span>
        </label>

        </div> <!-- col-4 --> 



         <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="product" value="1" <?php if ($user->product == 1) {
           echo "checked"; }  ?> >
          <span>Product</span>
        </label>

        </div> <!-- col-4 --> 


         <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="blog" value="1" <?php if ($user->blog == 1) {
           echo "checked"; }  ?> >
          <span>  Blog </span>
        </label>

        </div> <!-- col-4 --> 

 <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="order" value="1" <?php if ($user->order == 1) {
           echo "checked"; }  ?> >
          <span>Order</span>
        </label>

        </div> <!-- col-4 --> 

<div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="other" value="1" <?php if ($user->other == 1) {
           echo "checked"; }  ?>  >
          <span>Other </span>
        </label>

        </div> <!-- col-4 --> 


        <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="report" value="1" <?php if ($user->report == 1) {
           echo "checked"; }  ?> >
          <span> Report</span>
        </label>

        </div> <!-- col-4 --> 


         <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="role" value="1" <?php if ($user->role == 1) {
           echo "checked"; }  ?> >
          <span> Role</span>
        </label>

        </div> <!-- col-4 --> 


         <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="return" value="1" <?php if ($user->return == 1) {
           echo "checked"; }  ?> >
          <span>  Return</span>
        </label>

        </div> <!-- col-4 --> 



         <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="contact" value="1" <?php if ($user->contact == 1) {
           echo "checked"; }  ?> >
          <span>  Contact</span>
        </label>

        </div> <!-- col-4 --> 


         <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="comment" value="1" <?php if ($user->comment == 1) {
           echo "checked"; }  ?> >
          <span>  Comment</span>
        </label>

        </div> <!-- col-4 --> 


         <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="setting" value="1"<?php if ($user->setting == 1) {
           echo "checked"; }  ?> >
          <span>  Setting</span>
        </label>

        </div> <!-- col-4 --> 


        <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="stock" value="1"<?php if ($user->stock == 1) {
           echo "checked"; }  ?> >
          <span>  Stock</span>
        </label>

        </div> <!-- col-4 --> 


 

          </div><!-- end row --> 
<br><br>


            <div class="form-layout-footer">
              <button type="submit" class="btn btn-info mg-r-5">Submit  </button>
           
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->

        </form> 



        
        </div><!-- row -->

  
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
 
 
 
 

@endsection
