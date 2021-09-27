'use strict';

$(document).ready(function () {
    $('#bloodGroup').select2({
        width: '100%',
    });
    $('#departmentId,#doctorDepartmentId').select2({
        width: '100%',
    });

    $('#editFinanaceForm').submit(function () {
        if ($('#error-msg').text() !== '') {
            return false;
        }
    });
    $('#editFinanaceForm').
        find('input:text:visible:first').
        focus();
});
