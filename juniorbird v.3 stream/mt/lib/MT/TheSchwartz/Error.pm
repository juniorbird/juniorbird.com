# Movable Type (r) (C) 2001-2009 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id: Error.pm 3683 2009-05-11 22:26:15Z jmarcotte $

package MT::TheSchwartz::Error;

use strict;
use base qw( MT::Object );

__PACKAGE__->install_properties({
    column_defs => {
        jobid => 'integer not null', # bigint unsigned not null
        funcid => 'integer not null', # int unsigned not null default 0
        message => 'string(255) not null', # varchar(255) not null
        error_time => 'integer not null', # integer unsigned not null
    },
    datasource  => 'ts_error',
    indexes => {
        jobid => 1,
        error_time => 1,
        funcid_time => {
            columns => ['funcid', 'error_time'],
        },
    },
    defaults => {
        funcid => 0,
    },
    cacheable => 0,
});

sub class_label {
    MT->translate("Job Error");
}

1;
