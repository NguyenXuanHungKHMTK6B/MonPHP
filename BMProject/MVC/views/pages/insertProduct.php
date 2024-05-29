<?php 
if($_SERVER['REQUEST_METHOD'] ==='POST'){
    $newAction = "";
}else{
    $newAction = "./insertProduct";
}
?>
<form method="post" action="<?php echo $newAction; ?>" enctype="multipart/form-data"> 
<div class="mb-3">
    <label for="" class="form-label">ID</label>
    <input
        type="text"class="form-control" name="id" id="" aria-describedby="helpId" placeholder=""
    />
    <small id="helpId" class="form-text text-muted"></small>
</div>
<div class="mb-3">
    <label for="" class="form-label">Product Name</label>
    <input
        type="text" class="form-control" name="pname" id="" aria-describedby="helpId" placeholder=""
    />
    <small id="helpId" class="form-text text-muted"></small>
</div>
<div class="mb-3">
    <label for="" class="form-label">Company</label>
    <input
        type="text" class="form-control" name="company"id="" aria-describedby="helpId" placeholder=""
    />
    <small id="helpId" class="form-text text-muted"></small>
</div>
<div class="mb-3">
    <label for="" class="form-label">Select Band</label>
    <input
        type="text"class="form-control"name="band" id="" aria-describedby="helpId" placeholder=""
    />
    <small id="helpId" class="form-text text-muted"></small>
</div>
<div class="mb-3">
    <label for="" class="form-label">Select Year</label>
    <input
        type="text" class="form-control" name="year" id="" aria-describedby="helpId" placeholder=""
    />
    <small id="helpId" class="form-text text-muted"></small>
</div>
<div class="mb-3">
    <label for="" class="form-label">Choose Image</label>
    <input
        type="text"class="form-control" name="imageFile" id="" aria-describedby="helpId" placeholder=""
    />
    <small id="helpId" class="form-text text-muted"></small>
</div>
<button
    type="submit" name = "btInsert" class="btn btn-primary">
    Insert
</button>
</form>
<?php 
if(isset($data["result"])){
    if($data["resulit"]){
        echo "Thêm mới thành công.";
    }else{
        echo "Thêm mới không thành công.";
    }
}
?>



