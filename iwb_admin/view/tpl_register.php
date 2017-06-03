<div class="container">

<div class="row">


<h3 class="text-center">Corporate Registration</h3>
<div class="col-md-4 col-md-offset-4">
<form>
  <div class="form-group">
    <label for="Companyname">Company Name</label>
    <input type="text" class="form-control" id="cname"  placeholder="Enter Company Name">
  </div>
  
  
  <div class="form-group">
    <label for="companySize">Company Size</label>
    <select class="form-control " id="companysize">
      <option>Select</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="coroorateLocation">Corporate Location</label>
    <select class="form-control" id="clocation">
      <option>Select</option>
      <option>Chennai</option>
      <option>Bomabay</option>
      <option>Delhi</option>
      <option>Banglore</option>
      <option>Hydrabed</option>
    </select>
  </div>

  <div class="form-group">
    <label for="contactPersonname">Contact Person Name</label>
    <input type="text" class="form-control" id="cname"  placeholder="Enter Contact Person Name">
  </div>

  <div class="form-group">
    <label for="contactPerson">Contact Person Email</label>
    <input type="email" class="form-control" id="cname"  placeholder="Enter Contact Person Email">
  </div>

<div class="form-group">
    <label for="contactPersonMob">Contact Person No</label>
    <input type="text" class="form-control" id="cno"  placeholder="Enter Contact Person No">
  </div>
  
  <button type="button" id="register" class="btn btn-primary">Register</button>
  <button type="button" class="btn btn-primary">Preview</button>
</form>
</div>
</div>
</div>



 <script type="text/javascript">
   $("#register").click(function() {
      alert("Thanks for initiating your registration with us.Our Salesperson will get in touch with you within – hours, for more queries contact 0000000");
   });
 </script>