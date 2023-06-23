$(function() {
    var pruebaTable = $('#prueba-table').DataTable({
        processing: true,
        order: [[0, 'asc']],
        serverSide: true,
        ajax: {
            url: urlIndexPrueba
        },
        deferRender: true,
        columns: [
            { data: 'id', name: 'id', orderable: false, searchable: false , visible: false },
            { data: 'Prueba', name: 'Prueba', title: 'Prueba' },
            { data: 'action', name: 'action', title: 'Opciones', orderable: false, searchable: false },
        ],
        initComplete: function () {
            this.api().columns().every(function () {
                var column = this;
                var input = document.createElement("input");
                $(input).appendTo($(column.footer()).empty())
                .on('change', function () {
                    var val = $.fn.dataTable.util.escapeRegex($(this).val());
                    column.search(val ? val : '', true, false).draw();
                });                             
            });
        },
        language: { "url": "/lang/datatables.es.json" },
        dom: 'lftip',
    });

    $('#prueba-table tbody').on('click', 'tr', function () {
        var data = pruebaTable.row( this ).data();
        vm.$options.methods.showPrueba(data.id);
    });
});

var vm = new Vue({
    el: '#prueba-app',
    data: {
        errorBag: {},
        prueba: {},
    },
    methods: {
        newPrueba () {
            vm.prueba = {};
            vm.errorBag = {};
            $('#frm-prueba').modal('show');
        },
        showPrueba (id) {
            axios.post( urlShowPrueba, { id: id })
                .then ( result => {
                        response = result.data;
                    vm.prueba = response.data;
                    $('#view-prueba').modal('show');
                })
                .catch ( error => {
                    console.log( error );
                });
        },
        editPrueba () {
            vm.errorBag = {};
            $('#frm-prueba').modal('show');  
            $('#view-prueba').modal('hide');
        },
        savePrueba () {
            axios.post( urlSavePrueba, vm.prueba)
                .then ( result => {
                    response = result.data;
                    toastr.success(response.msg, 'Correcto!');
                    $('#frm-prueba').modal('hide');
                    var pruebaTabla = $('#prueba-table').DataTable();
                    pruebaTabla.draw();
                })
                .catch( error => {
                    vm.errorBag = error.data.errors;
                });
        },
        deletePrueba () {

            swal({
                title: "¿Estas seguro que deseas eliminar el registro?",
                text: "Esta accion es irreversible!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                    axios.post( urlDestroyPrueba, {id : vm.prueba.id} )
                        .then( result => {
                            response = result.data;
                            toastr.success(response.msg, 'Correcto!');
                            var pruebaTabla = $('#prueba-table').DataTable();
                            pruebaTabla.draw();
                            $('#view-prueba').modal('hide');
                        })
                        .catch( error => {
                            console.log ( error );
                        })
                } else {
                  //swal("Your imaginary file is safe!");
                }
              });
        }
    },
});