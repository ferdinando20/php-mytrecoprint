<div class="right_col" role="main">
    <div class="row mt-5">
	    <div class="col-md-6 ">
                <div class="x_title">
                    <h2>Form Edit Order</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form class="form-label-left input_mask form-horizontal" method="post" action="<?php echo site_url('order/edit');?>">
                    <input type="hidden" name="id_order" class="form-control" value="<?php echo $order->id_order; ?>">
                        <!-- <div class="form-group row">
                            <div class="col-md-12 col-sm-12 ">
                                <input type="text" name="nama_user" class="form-control" value="<?php echo $order->nama_user; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 ">
                                <input type="text" name="alamat user" class="form-control" value="<?php echo $order->alamat_user; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 ">
                                <input type="text" name="harga" class="form-control" value="<?php echo $order->harga; ?>" readonly>
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 ">
                                <input type="text" name="tgl_order" class="form-control" value="<?php echo $order->tgl_order; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 ">
                                <input type="text" name="status_pembayaran" class="form-control" value="<?php echo $order->status_pembayaran; ?>">
                            </div>
                        </div>
                        <!-- <select class="mb-3 form-control rounded-0" name="status_pembayaran" id="">
                            <div class="col-md-12 col-sm-12">
                                
                                <?php foreach($order as $val){?>
                                    <option value=""><?php echo $val->status_pembayaran;?></option>
                                <?php } ?>
                            </div>
                        </select> -->
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 ">
                                <input type="text" name="status_pemesanan" class="form-control" value="<?php echo $order->status_pemesanan; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 ">
                                <input type="text" name="ongkir" class="form-control" value="<?php echo $order->ongkir; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 ">
                                <input type="text" name="kurir" class="form-control" value="<?php echo $order->kurir; ?>">
                            </div>
                        </div>  
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12 ">
                                <input type="text" name="resi_pemesanan" class="form-control" value="<?php echo $order->resi_pemesanan; ?>">
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