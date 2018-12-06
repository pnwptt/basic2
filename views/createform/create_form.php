<?php
    use yii\widgets\ActiveForm;
    use yii\web\Session;

    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
    use yii\helpers\Url;
    //use dosamigos\tinymce\TinyMce;
    //use dosamigos\ckeditor\CKEditor;;

    $session = new Session();
    $session->open();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create form</title>
</head>
	<body>
		<div class="page-wrapper" style="min-height: 99px;">
			<div class="row">
				<div class="col-md-12">
					<h2 class="page-header" style="color: #930000"> Create PPA Inspection form </h2>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							PPA Inspection form Lists
							<a style="float: right" class="btn btn-xs btn-default" href="form">Add</a>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-12">
									<table class="table">
										<thead>
											<tr>
												<th>No.</th>
												<th>Name</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($record as $record): ?>
												<tr>
													<td align=""> <?php echo $record->?></td>
													<td align=""> <?php echo $record->?></td>
													<td align=""> <?php echo $record->?></td>
													<td align=""> <?php echo $record->?></td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</body>
</html>