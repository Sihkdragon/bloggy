<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
        selector: 'textarea#body', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'code table lists autoresize',
        toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
        height: 980,
        width:800
      });
    </script>

</div>