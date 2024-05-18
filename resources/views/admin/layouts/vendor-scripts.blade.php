<script src="{{ asset('admin/assets/libs/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/node-waves/node-waves.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/feather-icons/feather-icons.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/plugins/lord-icon-2.1.0.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins.min.js') }}"></script>
<script>
    $('.js-ajax-select2').select2({
      ajax: {
        url: '/manage/product/getProductCategory',
        dataType: 'json',
        // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
        processResults: function (data) {
            return {
                results: $.map(data, function (item) {
                  return {
                    id: item.category_id,
                    text: item.category_name
                  };
                })
            };
        },
        // placeholder: 'Search for a repository',
        minimumInputLength: 1,
        // templateResult: formatRepo,
        // templateSelection: formatRepoSelection
      }
    });
</script>
@yield('script')
@yield('script-bottom')
