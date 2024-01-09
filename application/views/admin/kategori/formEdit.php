<div class="right_col" role="main">
    <div class="row mt-5">
	    <div class="col-md-6 ">
                <div class="x_title">
                    <h2>Form Add Category</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form class="form-label-left input_mask form-horizontal" method="post" action="<?php echo site_url('kategori/edit');?>">
                    <input type="hidden" name="id_kategori" class="form-control" value="<?php echo $kategori->id_kategori; ?>">
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 ">
                                <input type="text" name="nama_kategori" class="form-control" value="<?php echo $kategori->nama_kategori; ?>">
                            </div>
                        </div>
                                            
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 mt-2">
                                <button type="submit" class="btn btn-secondary rounded-0 float-right">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
		</div>
    </div>
</div>