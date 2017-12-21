//------------------------- Oper Konfirmasi hapus about ------------------------------
$(document).ready(function(){

$('#about_delete').on('show.bs.modal', function (event) {
var div = $(event.relatedTarget)
var id = div.data('id')
var modal = $(this)

modal.find('#about-delete').attr("href","?tampil=about_delete&id="+id);
})}
);

//------------------------- Oper Konfirmasi hapus aboutlist ------------------------------
$(document).ready(function(){

$('#aboutlist_delete').on('show.bs.modal', function (event) {
var div = $(event.relatedTarget)
var id = div.data('id')
var modal = $(this)

modal.find('#aboutlist-delete').attr("href","?tampil=aboutlist_delete&id="+id);
})}
);

//------------------------- Oper Konfirmasi hapus skills ------------------------------
$(document).ready(function(){

$('#skills_delete').on('show.bs.modal', function (event) {
var div = $(event.relatedTarget)
var id = div.data('id')
var modal = $(this)

modal.find('#skills-delete').attr("href","?tampil=skills_delete&id="+id);
})}
);

//------------------------- Oper Konfirmasi hapus skillslist ------------------------------
$(document).ready(function(){

$('#skillslist_delete').on('show.bs.modal', function (event) {

var div = $(event.relatedTarget)
var id = div.data('id')
var modal = $(this)

modal.find('#skillslist-delete').attr("href","?tampil=skillslist_delete&id="+id);
})}
);

//------------------------- Oper Konfirmasi hadir Peserta ------------------------------
$(document).ready(function(){

$('#modalk_hadir').on('show.bs.modal', function (event) {

var div = $(event.relatedTarget)
var id = div.data('id')
var modal = $(this)

modal.find('#konfirm-hadir').attr("href","?tampil=konfirm_hadirproses&id="+id);
})}
);

//------------------------- Oper Konfirmasi sertifikat Peserta ------------------------------
$(document).ready(function(){

$('#modalk_sertif').on('show.bs.modal', function (event) {

var div = $(event.relatedTarget)
var id = div.data('id')
var modal = $(this)

modal.find('#konfirm-sertif').attr("href","?tampil=sertifikat_konfirmasi&id="+id);
})}
);

//------------------------- Oper Konfirmasi Waiting List Peserta ------------------------------
$(document).ready(function(){

$('#modalk_wl').on('show.bs.modal', function (event) {

var div = $(event.relatedTarget)
var id = div.data('id')
var modal = $(this)

modal.find('#konfirm-wl').attr("href","?tampil=waiting_listproses&id="+id);
})}
);
