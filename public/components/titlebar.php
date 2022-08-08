<div class="titlebar">
    <i class="fa-solid fa-chevron-left hover:bg-stone-100/80 hover:text-gray-800 py-2 px-4 rounded-lg cursor-pointer smooth" id="back"></i>
    <p id="titlebar"></p>
    <script>
        var content = $('#title').html();
        $('#titlebar').text(content);

        $('#back').on('click', function(e) {
            e.preventDefault();
            window.history.back();
        });
    </script>
</div>