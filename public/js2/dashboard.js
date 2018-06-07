var sidebarIsOpened = false;
var popupEditIsOpened = false;
var popupAddIsOpened = false;

// FUNCTION FOR REDIRECTING TO A PAGE
// AFTER DELETING AN ITEM
function redirect(to)
{
    location.href = to;
}

// SIDEBAR HANDLER
function toggleSidebar() {
    var sidebar = document.getElementById('sidebar');
    sidebarIsOpened = !sidebarIsOpened;

    if(sidebarIsOpened) {
        sidebar.style.left = '0';
    } else {
        sidebar.style.left = '-500px';
    }
}

// POPUP HANDLER FOR EDITING
function togglePopupEdit() {
    var popup = document.getElementById('popupEdit');
    popupEditIsOpened = !popupEditIsOpened;

    if(popupEditIsOpened) {
        popup.style.display='flex';
        popup.style.left='0';
    } else {
        popup.style.display='none';
        popup.style.left='-5000px';
    }
}

//POPUP HANDLER FOR ADDING

function togglePopupAdd() {
    var popup = document.getElementById('popupAdd');
    popupAddIsOpened = !popupAddIsOpened;

    if(popupAddIsOpened) {
        popup.style.display='flex';
        popup.style.left='0';
    } else {
        popup.style.display='none';
        popup.style.left='-5000px';
    }
}

// FUNCTIONS FOR EDITING AND DELETING

// PAYMENTS
// PAYMENTS EDITING
function editPayment() {
    event.preventDefault();

    var id = this.id;
    $.ajaxSetup({
        headers: {
            'Content-Type':'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        dataType: 'json',
        type: "POST",
        url: '/payments/'+id,
        data: {id: id},
        success: function( response ) {
            $('#popup-heading-edit').text('Редактироване платежа #'+response.id);
            $('#amount-edit').val(response.amount);
            $('#date-edit').val(response.date);
            $('#type-edit').val(response.type);
            $('.popup-form').attr('action', '/payments/'+response.id+'/edit');
        }
    });
}

// DELETING PAYMENT

function deletePayment() {
    var id = this.id;
    var token = $(this).data('token');
    var row = $('li.'+id);

    var result = confirm("Удалить?");
    if (result) {
        $.ajaxSetup({
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            dataType: 'json',
            type: "delete",
            url: '/payments/' + id,
            data: {_token: token, id: id, _method:'delete'},
            success: function (response) {

                row.css('background-color', 'lightcoral');
                row.fadeOut(1000);

                setInterval(function () {
                    redirect('payments');
                }, 500);
            }
        });
    }
}

// STAFF

// ACTIVATING STAFF

function activateStaff() {
    event.preventDefault();
    var row = this;
    var id = this.id;
    $.ajaxSetup({
        headers: {
            'Content-Type':'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        dataType: 'json',
        type: "POST",
        url: '/staff/'+id+'/activate',
        data: {id: id},
        success: function( response ) {

            var messages = document.getElementById('messages');
            messages.insertAdjacentHTML('beforeend',
                ' <div class="alert-success message-alert" role="alert">\n' +
                'Стафф #' + response.id + ' активирован' + '</div>');

            $(row).parent().css('background-color', 'lightcoral');
            $(row).parent().fadeOut(1000);
            setInterval(function(){
                redirect('staff');
            }, 500);

        }
    });
}

// EDITING STAFF

function editStaff() {
    event.preventDefault();
    var id = this.id;
    var status = 'Активен';
    $.ajaxSetup({
        headers: {
            'Content-Type':'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        dataType: 'json',
        type: "POST",
        url: '/staff/'+id,
        data: {id: id},
        success: function( response ) {

            $('#name-edit').val(response.name);
            $('#surname-edit').val(response.surname);
            $('#address-edit').val(response.address);
            $('#salary-edit').val(response.salary);
            $('#phone-edit').val(response.phone);
            $('#position-edit').val(response.position);

            if(response.activated)
            {
                status = 'true';
                $('#activated-edit').val(status);
            } else {
                status = 'false';
                $('#activated-edit').val(status);
            }

            $('.popup-form').attr('action', '/profile/'+response.id+'/edit');
        }
    });
}

// INGREDIENTS
// EDIT

function editIngredient() {
    event.preventDefault();
    var id = this.id;
    $.ajaxSetup({
        headers: {
            'Content-Type':'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        dataType: 'json',
        type: "POST",
        url: '/ingredients/'+id,
        data: {id: id},
        success: function( response ) {

            $('#popup-heading-edit').text('Редактироване ингредиента #'+response.id);
            $('#price-edit').val(response.price);
            $('#amountperpack-edit').val(response.amountperpack);
            $('#title-edit').val(response.title);
            $('#description-edit').val(response.description);
            $('.popup-form').attr('action', '/ingredients/'+response.id+'/edit');

        }
    });
}

// DELETE

function deleteIngredient() {
    var id = this.id;
    var token = $(this).data('token');
    var row = $('li.'+id);
    var result = confirm("Удалить?");
    if (result) {
        $.ajaxSetup({
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            dataType: 'json',
            type: "delete",
            url: '/ingredients/' + id,
            data: {
                _method: 'delete',
                _token: token,
                id: id
            },
            success: function (response) {

                row.css('background-color', 'lightcoral');
                row.fadeOut(1000);
                setInterval(function () {
                    redirect('ingredients');
                }, 500);


            }
        });
    }
}

// PRODUCTS
// EDIT

function editProduct() {
    event.preventDefault();
    var token = $(this).data('token');
    var id = this.id;
    $.ajaxSetup({
        headers: {
            'Content-Type':'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        dataType: 'json',
        type: "POST",
        url: '/products/'+id,
        data: {id: id,  _token: token},
        success: function( response ) {

            $('#popup-heading-edit').text('Редактироване продукта #'+response.id);
            $('#price-edit').val(response.price);
            $('#title-edit').val(response.title);
            $('#description-edit').val(response.description);
            $('.popup-form').attr('action', '/products/'+response.id+'/edit');

            console.log(response.ingredients);

            var inputs = document.getElementsByClassName('ingredient-input');

            [].forEach.call(inputs, function(item, i, arr) {
                if(response.ingredients.includes(item.id)) {
                    item.checked = true;
                }

            });

        }
    });
}

// DELETE

function deleteProduct() {
    var id = this.id;
    var token = $(this).data('token');
    var row = $('li.'+id);

    var result = confirm("Удалить?");
    if (result) {
        $.ajaxSetup({
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            dataType: 'json',
            type: "delete",
            url: '/products/' + id,
            data: {_token: token, id: id, _method: 'delete'},
            success: function (response) {

                row.css('background-color', 'lightcoral');
                row.fadeOut(1000);

                setInterval(function () {
                    redirect('products');
                }, 500);


            }
        });
    }
}

// SHIFTS
// EDIT

function editShift() {
    event.preventDefault();
    var id = this.id;
    $.ajaxSetup({
        headers: {
            'Content-Type':'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        dataType: 'json',
        type: "POST",
        url: '/shifts/'+id,
        data: {id: id},
        success: function( response ) {

            $('#popup-heading-edit').text('Редактироване дня #'+response.id);

            $('#date-edit').val(response.date);
            $('#finishing_at-edit').val(response.finishing_at);
            $('#starting_at-edit').val(response.starting_at);
            $('#description-edit').val(response.description);

            $('.popup-form').attr('action', '/shifts/'+response.id+'/edit');

            var options = $('.staff-fullname').toArray();

            options.forEach(function(item, i, arr) {
                if(item.innerHTML === response.staff_fullname)
                {
                    $('#staff_id-edit').val(response.staff_id).change();
                }
            });
        }
    });
}

// AJAX FOR "ON THE FLY" EDITING & DELETING
$(document).ready(function() {

    $('.table-edit-payments').on('click', editPayment);

    $('.table-delete-payments').on('click', deletePayment);

    $('.table-edit-staff').on('click', editStaff);

    $('.table-edit-ingredients').on('click', editIngredient);

    $('.table-delete-ingredients').on('click', deleteIngredient);

    $('.table-edit-products').on('click', editProduct);

    $('.table-delete-products').on('click', deleteProduct);

    $('.table-edit-shifts').on('click', editShift);

    $('.profile-activator').on('click', activateStaff);

});

//# sourceMappingURL=dashboard.js.map

//# sourceMappingURL=dashboard.js.map
