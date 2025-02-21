$(document).ready(function () {
    fetchCategories();

    function fetchCategories() {
        $.get('/fetch-categories', function (data) {
            let rows = '';
            data.categories.forEach((category, index) => {
                rows += `<tr>
                    <td>${index + 1}</td>
                    <td>${category.name}</td>
                    <td>${category.description || '-'}</td>
                    <td>
                        <button class="btn btn-warning btn-sm edit" data-id="${category.id}" data-name="${category.name}" data-description="${category.description}">Modifier</button>
                        <button class="btn btn-danger btn-sm delete" data-id="${category.id}">Supprimer</button>
                    </td>
                </tr>`;
            });
            $('#categoryTable').html(rows);
        });
    }

    $('#categoryForm').submit(function (e) {
        e.preventDefault();
        let id = $('#category_id').val();
        let url = id ? `/categories/${id}` : '/categories';
        let type = id ? 'PUT' : 'POST';

        $.ajax({
            url: url,
            type: type,
            data: {
                name: $('#name').val(),
                description: $('#description').val(),
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function () {
                $('#categoryForm')[0].reset();
                $('#category_id').val('');
                fetchCategories();
            }
        });
    });

    $(document).on('click', '.edit', function () {
        $('#category_id').val($(this).data('id'));
        $('#name').val($(this).data('name'));
        $('#description').val($(this).data('description'));
    });

    $(document).on('click', '.delete', function () {
        let id = $(this).data('id');
        $.ajax({
            url: `/categories/${id}`,
            type: 'DELETE',
            data: { _token: $('meta[name="csrf-token"]').attr('content') },
            success: function () {
                fetchCategories();
            }
        });
    });
});
