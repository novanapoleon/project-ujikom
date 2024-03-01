var segmentTerakhir = window.location.href.split('/').pop();

$.ajax({
    url: window.location.origin +'/detail/'+segmentTerakhir+'/getdatadetail',
    type: "GET",
    dataType: "JSON",
    success: function(res){
        console.log(res)
        $('#fotodetail').prop('src','/assets/'+res.dataDetailFoto.url)
        $('#judulfoto').html(res.dataDetailFoto.judul_foto)
        $('#deskripsifoto').html(res.dataDetailFoto.deskripsi_foto)
        $('#username').html(res.dataDetailFoto.user.nama_lengkap)
        $('#picture').prop('src','/assets/'+res.dataDetailFoto.user.picture)
    
        ambilKomentar()
    },
    error: function(jqXHR, textStatus, errorThrown){
        alert('gagal')
    }
})
function ambilKomentar(){
    $.getJSON(window.location.origin +'/detail/getComment/'+segmentTerakhir, function(res){
        console.log(res)
        if(res.data.length === 0){
            $('#listkomentar').html('<div>belum ada komentar</div>')
        } else {
            comment= []
            res.data.map((x)=>{
                let datacomentar = {
                    idUser: x.user.id,
                    pengirim: x.user.nama_lengkap,
                    waktu: x.created_at,
                    isikomentar: x.isi_komentar,
                    potopengirim: x.user.picture
                }
                comment.push(datacomentar);
            })
            tampilkankomentar()
        }
    })
}
const tampilkankomentar = ()=>{
    $('#listkomentar').html('')
    comment.map((x, i)=>{
        $('#listkomentar').append(`
        <div class="media flex pb-4">
        <a href="/otherpin/${x.idUser}">
          <img class="rounded-full max-w-none w-12 h-12" src="/assets/${x.potopengirim}" />
        
        <div class="media-body">
          <div>
            <a class="inline-block text-base font-bold mr-2" href="#">${x.pengirim}</a>
            </a>
            <span class="text-slate-500 dark:text-slate-300">${new Date(x.waktu).toLocaleDateString("id")}</span>
          </div>
          <p>${x.isikomentar}</p>
          <div class="mt-2 flex items-center">
            <a class="inline-flex items-center py-2 mr-3" href="#">
            </a>
          </div>
        </div>
      </div>
      `)
    })
}
function kirimkomentar(){
    $.ajax({
        url: window.location.origin +'/detail/kirimkomentar',
        type: "POST",
        dataType: "JSON",
        data: {
            _token: $('input[name="_token"]').val(),
            idfoto: segmentTerakhir,
            isi_komentar: $('input[name="isi_komentar"]').val()
        },
        success: function(res){
          location.reload()

        },
        error: function(jqXHR, textStatus, errorThrown){
            alert('gagal mengirim komentar')
        }
    })
}

