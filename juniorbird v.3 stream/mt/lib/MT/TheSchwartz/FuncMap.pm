# Movable Type (r) (C) 2001-2009 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id: FuncMap.pm 3455 2009-02-23 02:29:31Z auno $

package MT::TheSchwartz::FuncMap;
use strict;
use base qw( MT::Object );

__PACKAGE__->install_properties({
    column_defs => {
        funcid => 'integer not null auto_increment', # int unsigned primary key not null auto_increment
        funcname => 'string(255) not null', # varchar(255) not null
    },
    datasource => 'ts_funcmap',
    primary_key => 'funcid',
    indexes => {
        funcname => {
            unique => 1,
        },
    },
    # not captured:
    # unique(funcname)
});

sub class_label {
    MT->translate("Job Function");
}

1;