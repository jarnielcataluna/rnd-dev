var jobType = 'agent';

$('#jobType').change(function() {
    if ($('#jobType option:selected').val() == 'Agent') {
        $('.nonagentJobs').hide();
        $('#agentJobs').show();
        jobTypeFlag = 'agent';
    } else if ($('#jobType option:selected').val() == 'Non-Agent') {
        $('#agentJobs').hide();
        $('.nonagentJobs').show();
        jobTypeFlag = 'non-agent';
    } else {
        $('#agentJobs').hide();
        $('.nonagentJobs').hide();
    }
});

$('#position_level').change(function() {
    if ($('#position_level option:selected').val() == 'Supervisory') {
        $('.jobSelection1').hide();
        $('.jobSelection3').hide();
        $('.jobSelection4').hide();
        $('.jobSelection2').show();
    } else if ($('#position_level option:selected').val() == 'Managerial') {
        $('.jobSelection1').hide();
        $('.jobSelection2').hide();
        $('.jobSelection4').hide();
        $('.jobSelection3').show();
    } else if ($('#position_level option:selected').val() == 'Director') {
        $('.jobSelection3').hide();
        $('.jobSelection2').hide();
        $('.jobSelection1').hide();
        $('.jobSelection4').show();
    } else {
        $('.jobSelection2').hide();
        $('.jobSelection3').hide();
        $('.jobSelection4').hide();
        $('.jobSelection1').show();
    }
});

$('#referralCheck').change(function() {
    if ($('#referralCheck option:selected').val() == 'Yes') {
        $('.empDetails').show();
        $('#notEmployeeSubmit').hide();
        $('#right').show();
    } else {
        $('.empDetails').hide();
        $('#right').hide();
        $('#notEmployeeSubmit').show();
    }

    $(this).parent().find('.errorNotif').remove();
});

$('#formerEmployee').change(function() {
    if ($('#formerEmployee option:selected').val() == 'Yes') {
        $('div[id="formerIbexEmployee"]').show();
    } else {
        $('div[id="formerIbexEmployee"]').hide();
    }
    $(this).parent().find('.errorNotif').remove();
});

$('#appliedBefore').change(function() {
    if ($('#appliedBefore option:selected').val() == 'Yes') {
        $('.fromIbex').show();
    } else {
        $('.fromIbex').hide();
    }
});

$('#experience').change(function() {
    if ($('#experience option:selected').val() == 'With Experience') {
        $('#formerEmp').show();
    } else {
        $('#formerEmp').hide();

    }
});

