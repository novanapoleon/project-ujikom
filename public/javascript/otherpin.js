var segmentTerakhir = window.location.href.split("/").pop();

$.getJSON(window.location.origin +'/otherpin/getDataPin/'+segmentTerakhir, function(res){
    console.log(res)
    $('#namaUser').html(res.dataUser.nama_lengkap)
    $('#bio').html(res.dataUser.bio)
    $('#imageUser').prop('src', '/assets/'+res.dataUser.picture)
})

var segmentTerakhir = window.location.href.split("/").pop();
var paginate = 1;
var dataExplore = [];
loadMoreData(paginate);
$(window).scroll(function(){
    if ($(window).scrollTop() + $(window).height() >= ($(document).height() -20)){
        paginate++;
        loadMoreData(paginate);
    }
})

function loadMoreData(paginate){
    $.ajax({
        url: window.location.origin + '/getdataotherpinexplore/'+ '?page='+paginate,
        type: "get",
        dataType: "JSON",
        data:{
            idUser: segmentTerakhir
        },
        success: function(e){
            console.log(e)
            e.data.data.map((x)=>{
                var hasilpencarian = x.likefotos.filter(function(hasil){
                    return hasil.user_id === e.idUser
                })
                if(hasilpencarian.length <= 0){
                    userlike = 0;
                } else {
                    userlike = hasilpencarian[0].user_id;
                }
                let datanya = {
                    id: x.id,
                    judul: x.judul_foto,
                    deskripsi: x.deskripsi_foto,
                    foto: x.url,
                    jml_comment: x.comments_count,
                    jml_like: x.likefotos_count,
                    idUserLike: userlike,
                    useractive: e.idUser

                }
                dataExplore.push(datanya)
                console.log(userlike)
                console.log(e.idUser)
            })
            getExplore()
        },
        error: function(jqXHR, textStatus, errorThrown){

        }
    })
}
const getExplore =()=>{
    $('#exploredata').html('')
    dataExplore.map((x, i)=>{
        $('#exploredata').append(
            `
            <div>
                <a href="/detail/${x.id}" class="">
                        <div class = "group rounded-lg bg-white w-[285px] h-[345px] shadow-lg">            
                            <div class="w-[280px] h-[280px] aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                <img src="/assets/${x.foto}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
                            </div>
                        </div>
                  
                </a>
                <div class="flex flex-wrap items-center justify-between px-2">
                <div>
                    <div class="flex flex-col">
                    <div>
                        ${x.judul}
                    </div>
                    </div>
                </div>
                <div>
                    <small>${x.jml_comment}</small>
                    <span class="bi bi-chat-left-text"></span>
                    <small>${x.jml_like}</small>
                    <span class="bi ${x.idUserLike === x.useractive ? 'bi-heart-fill text-red-800': 'bi-heart'}" onclick="likes(this, ${x.id})"></span>
                </div>
                </div>
            
            </div> 

          
            `
        )
    })
}

function likes(txt, id){
    $.ajax({
        url: window.location.origin +'/likefotos',
        dataType: "JSON",
        type: "POST",
        data: {
            _token: $('input[name="_token"]').val(),
            idfoto: id
        },

        success: function(res){
            console.log(res)
            location.reload()
        },
        error: function(jqXHR, textStatus, errorThrown){
            alert('gagal')
        }
    })
}