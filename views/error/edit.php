<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="page-wrapper" style="min-height: 99px;">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-header" style="color:#930000">Error code</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Error code
                        <!-- <div align="right">
                            <button type="button" onClick="window.location.href='/add_error_code'"> Add </button>
                        </div> -->
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12" >
                                <form role="form">
                                    <div class="form-group">
                                            <label for="error_code_rank">Rank </label>
                                            <input type="text" class="form-control" id="" placeholder="Enter Rank Error Code">
                                    </div>
                                    <div class="form-group">
                                            <label for="error_code_id">Error Code  </label>
                                            <input type="text" class="form-control" id="" placeholder="Enter Error Code"> 
                                    </div>
                                    <div class="form-group">
                                            <label for="error_code_name">Inspection detail  </label>
                                            <input type="number" class="form-control" id="" placeholder="Enter Inspection detail">
                                    </div>
                                    <div class="form-group" align="center">
                                            <label for="error_code_type">Type</label>
                                            <input list="error_code_type" size="14">
                                            <datalist id="error_code_type">
                                                <option value="Measurement">Measurement</option>
                                                <option value="Test Specification">qTest Specification</option>
                                                <option value="Failure symptoms">Failure symptoms</option>
                                            </datalist>
                                    </div>
                                    <div class="box-footer" align="center">
                                        <button type="button" class="btn btn-default " onclick="window.history.back()">Cancel</button>
                                        <button type="submit" class="btn btn-primary " onclick="return confirm('Are you sure?')">Submit</button>
                                    </div><!--/box-footer-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>       
    </div> 
</body>
</html>