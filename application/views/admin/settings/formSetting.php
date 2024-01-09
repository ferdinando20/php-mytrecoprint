<div class="right_col" role="main">
    <div class="col-9 col-lg-10 mt-5">
        <div class="col-md-12">
            <div class="col">
                <div class="py-2">
                    <a class="d-flex text-decoration-none align-items-center">
                        <h1 class="fs-4 d-none d-sm-inline text-dark">Settings</h1>
                    </a>
                </div>
                <div class="add">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="border rounded-2 p-5 form-horizontal" method="post" action="<?php echo site_url('settings/input'); ?>">
                                <h4 class="mb-4">Setting</h4>
                                <div class="mb-3">
                                    <label>Provinsi</label>
                                    <select class="form-control" id="provinsi2">
                                        <option value=""> Pilih Provinsi </option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>Kota/Kabupaten</label>
                                    <select class="form-control" id="kota2">
                                        <option value="<?= $setting->lokasi ?>"><?= $setting->lokasi ?></option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Toko</label>
                                    <input type="text" name="nama_toko" value="<?php echo $setting->nama_toko; ?>" class="form-control rounded-0" id="exampleInputEmail1" placeholder="" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                                    <input type="text" name="no_tlp" value="<?php echo $setting->no_tlp; ?>" class="form-control rounded-0" id="exampleInputEmail1" placeholder="" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                    <textarea rows="3" type="text" name="alamat_toko" class="form-control rounded-0" id="exampleInputEmail1" placeholder="" aria-describedby="emailHelp"><?php echo $setting->alamat_toko; ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary rounded-0 float-right">Save</button>
                                <a href="<?= site_url('adminpanel/dashboard') ?>" class="btn btn-secondary rounded-0 float-right">Back</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- api RAJA ONGKIR -->
<script type="text/javascript">
    function getLokasi() {
        var $op = $("#provinsi2");

        $.getJSON("provinsi", function(data) {
            $.each(data, function(i, field) {

                $op.append('<option value="' + field.province_id + '">' + field.province + '</option>');
            });
        });
    }

    getLokasi();

    $("#provinsi2").on("change", function(e) {
        e.preventDefault();
        var option = $('option:selected', this).val();
        $('#kota2 option:gt(0)').remove();

        if (option === '') {
            alert('null');
            $("#kota2").prop("disabled", true);
        } else {
            $("#kota2").prop("disabled", false);
            getKota(option);
        }
    });

    function getKota(idpro) {
        var $op = $("#kota2");

        $.getJSON("kota/" + idpro, function(data) {
            $.each(data, function(i, field) {
                $op.append('<option value="' + field.city_id + '">' + field.type + ' ' + field.city_name + '</option>');
            });
        });
    }
</script>