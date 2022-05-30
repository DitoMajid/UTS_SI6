<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <i class="fa fa-plus" style="color:green"> </i>  <?= $title_web;?>
    </h1>
    <ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
			<li class="active"><i class="fa fa-plus"></i>&nbsp;  <?= $title_web;?></li>
    </ol>
  </section>
  <section class="content">
	<div class="row">
	    <div class="col-md-12">
	        <div class="box box-primary">
                <div class="box-header with-border">
                </div>
			    <!-- /.box-header -->
			    <div class="box-body">
                    <form action="<?php echo base_url('data/prosesbuku');?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
								<div class="form-group">
									<label>Kategori</label>
									<select class="form-control select2" required="required"  name="kategori">
										<option disabled selected value> -- Pilih Kategori -- </option>
										<?php foreach($kats as $isi){?>
											<option value="<?= $isi['id_kategori'];?>"><?= $isi['nama_kategori'];?></option>
										<?php }?>
									</select>
								</div>
                                <div class="form-group">
                                    <label>Rak / Lokasi</label>
                                    <select name="rak" class="form-control select2" required="required">
										<option disabled selected value> -- Pilih Storage -- </option>
										<?php foreach($rakbuku as $isi){?>
											<option value="<?= $isi['id_rak'];?>"><?= $isi['nama_rak'];?></option>
										<?php }?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Seri</label>
                                    <input type="text" class="form-control" name="isbn"  placeholder="Contoh Nomor Seri : ******">
                                </div>
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" class="form-control" name="title" placeholder="Contoh : Knalpot Racing XXXXX">
                                </div>
                                <div class="form-group">
                                    <label>Brand</label>
                                    <input type="text" class="form-control" name="pengarang" placeholder="Brand">
                                </div>
                                <div class="form-group">
                                    <label>Merk</label>
                                    <input type="text" class="form-control" name="penerbit" placeholder="Merk">
                                </div>
                                <div class="form-group">
                                    <label>Tahun Produk</label>
                                    <input type="number" class="form-control" name="thn" placeholder="Tahun Produk : 2020">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Jumlah produk</label>
                                    <input type="number" class="form-control" name="jml" placeholder="Jumlah Produk : 10">
                                </div>
								
                                <div class="form-group">
                                    <label>Gambar 1 <small style="color:green">(gambar) * opsional</small></label>
                                    <input type="file" accept="image/*" name="gambar">
                                </div>
                                <div class="form-group">
                                    <label>Gambar 2 <small style="color:green">(pdf) * opsional</small></label>
                                    <input type="file" accept="" name="lampiran">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan Lainnya</label>
                                    <textarea class="form-control" name="ket" id="summernotehal" style="height:120px"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right">
							<input type="hidden" name="tambah" value="tambah">
                            <button type="submit" class="btn btn-primary btn-md">Submit</button> 
                    </form>
                            <a href="<?= base_url('data');?>" class="btn btn-danger btn-md">Kembali</a>
                        </div>
		        </div>
	        </div>
	    </div>
    </div>
</section>
</div>
