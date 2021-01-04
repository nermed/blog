<script src="https://code.jquery.com/jquery-3.5.1.js" 
integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" 
integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" 
integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="<?= base_url() ?>/build/runtime.js"></script>
<script src="<?= base_url() ?>/assetsjs/main.js"></script>
<script>
    $(document).on('click', '.btn-comment',function(e){
            e.preventDefault();

            const nom = $('#nom').val();
            const comment = $('#comment').val();
            page = document.location.href;
            idPage = page.substring(page.lastIndexOf( "/" )+1 );
            // console.log(idPage);
            
            $.ajax({
                url:'<?= base_url() ?>/comment/comment/'+idPage ,
                type: 'post',
                dataType: 'json',
                data: {
                    nom: nom,
                    comment: comment
                },
                success: function(data){
                    //console.log(data)
                    fetch();
                    $("#form")[0].reset();
                }
            })
    });
    $(document).on('click', 'like', function(e){
        e.preventDefault();
        page = document.location.href;
        idPage = page.substring(page.lastIndexOf( "/" )+1 );
        $.ajax({
            url: '<?= base_url() ?>/blog/likes/'+idPage,
            type: 'post',
            dataType: 'json',
            success: function(data){
                console.log(data)
            }
        })

    })
        function fetch(){
            page = document.location.href;
            idPage = page.substring(page.lastIndexOf( "/" )+1 )
            $.ajax({
                url: "<?= base_url() ?>/comment/fetch/"+idPage,
                type: "GET",
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                success: function(data){
                    //console.log(data.length)
                    if(data.length === 3){
                        $("#btn-comment").attr('disabled', true);
                        $("p").removeClass('fade');
                    }
                            var i = 1;
                var div = "";
                for (var key in data) {
                    
                    div += `<div class="col-8">
                            <div class="row">
                                <div class="col-3">
                                   <p class="mb-0"><strong>${data[key]['nom']}</strong></p> 
                                </div>
                                <div class="col-6">
                                   <p>${data[key]['comment']}</p> 
                                </div>
                                
                            </div>
                            </div>`
                    "<br>"
                }

                $(".comments").html(div);
                        }
                  })
        }
        fetch();
    $(document).on("click", "#del", function(e) {
        e.preventDefault();

        var del_id = $(this).attr("value");

        if (del_id == "") {
            alert("Delete id required");
        } else {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger mr-4'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Etes-vous sûr?',
                text: "Cette action est définitive",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Oui, supprime!',
                cancelButtonText: 'No, annulé!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {

                    $.ajax({
                        url: "<?php echo base_url(); ?>/blog/delete/" + del_id,
                        type: "post",
                        dataType: "json",
                        data: {
                            del_id: del_id
                        },
                        success: function(data) {
                            console.log(data)
                            fetch();
                            if (data.response === 'success') {
                                swalWithBootstrapButtons.fire(
                                    'Supprimé!',
                                    'Votre fichier a été supprimé.',
                                    'success'
                                )
                            }
                        }
                    });

                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Annulé',
                        'Votre fichier n\'est pas supprimé',
                        'error'
                    )
                }
            });
        }

    });
    // function like(x) {
        
    //     $('i').removeClass("fa-thumbs-up")
    //     x.classList.toggle("fa-thumbs-down");
        
    // }
</script>
</body>
</html>