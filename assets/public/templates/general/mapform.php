<form class="form" action="#" onSubmit="calcRoute();return false;" id="routeForm">
  <fieldset class="form-group">
    <a href="#" class="autoLink alert-success btn btn-success" style="display: none;">Use current location: <span>not found</span></a>
  </fieldset>
  <span class="col-lg-3">
  <fieldset class="form-group">
    <label> From: <br /> </label>
    <input class="form-control" type="text" id="routeStart" value="Strada Buftea, nr. 8, Cluj">
  </fieldset>
</span>
<span class="col-lg-4">
  <fieldset class="form-group">
    <label> To: <br /> </label>
      <input class="form-control" type="text" id="routeEnd" value="Str. Vlaicu Aurel, 439, Com. Suncuius, Bihor" readonly>
  </fieldset>
</span>
<span class="col-lg-2">
  <fieldset class="form-group">
    <label> <br /> </label>
    <label class="form-control"><input type="radio" name="travelMode" value="DRIVING" checked /> Driving</label>
  </fieldset>
</span>
<span class="col-md-3 col-md-offset-4">
  <input class="btn btn-info form-control" type="submit" value="Calculate route">
</span>
</div>
</form>
