$(document).ready(function () {
    'use strict';

    let tableName = '#doctorFinanceReportTable';
    let tbl = $(tableName).DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: doctorFinanceReportUrl,
        },
        ordering: false,
    //   order: [[0, 'desc']],
        columnDefs: [
            {
                'targets': [2],
                // 'orderable': false,
                'className': 'text-center',
                'width': '10%',
            },
            {
                targets: '_all',
                defaultContent: 'N/A',
            },
            {
                // 'targets': [1],
                // // 'orderable': false,
                // 'className': 'text-right',
                // 'width': '15%',
            },
        ],
        columns: [
            {
                data: 'user.first_name',
                name: 'user.first_name',
            },
            {
                data: 'created_at',
                name: 'created_at',
            },
            {
                data: 'totalAmount',
                name: 'totalAmount',
            },
            {
                data: function (row) {
                    let url = doctorFinanceReportUrl + '/' + row.created_at;
                    let data = [
                        {
                            'id': row.id,
                            'url': url,
                        }];
                    return prepareTemplateRender('#usersTemplate', data);
                },
                name: 'action',
            }
        ],
    });
});
