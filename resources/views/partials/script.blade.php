    @vite('resources/js/app.js')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://benalman.com/code/projects/jquery-throttle-debounce/jquery.ba-throttle-debounce.js"></script>
    <script src="/js/script.js"></script>
    @guest
    <script src="/js/guest.js"></script>
    @endguest

    <script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>

    <script>
        $(document).ready(function () {


            $(document).on('click', '#quickView', function (e) {
                e.preventDefault();

                let name = $(this).data('name');
                let price = $(this).data('price');
                let desc = $(this).data('desc');
                let category = $(this).data('category');
                // console.info(name);

                $('#showName').text(name);
                $('#showPrice').text(price);
                $('#showDesc').text(desc);
                $('#showCategory').text(category);
            });

            $("#search").keydown($.debounce(200, function(e) {
            let cari = $(this).val();
            $.ajax({
                url: "{{ route('produk.search') }}",
                method: "GET",
                data: { search: cari },
                success: function(res) {
                    $("#card").html(res);
                    if (res.status === 'gagal') {
                        $('#card').html('<h1 class="text-rdaWhite text-sm md:text-lg font-bold mt-100">' + '*Maaf Produk Tidak Di Temukan*' + '</h1>');
                    }
                }
            });
        }));



        });
    </script>