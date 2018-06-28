# Movable Type (r) (C) 2001-2009 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id: Config.pm 3455 2009-02-23 02:29:31Z auno $

package MT::Config;
use strict;
use base qw( MT::Object );

__PACKAGE__->install_properties({
    column_defs => {
        'id' => 'integer not null auto_increment',
        'data' => 'text',
    },
    primary_key => 'id',
    datasource => 'config',
});

sub class_label {
    MT->translate("Configuration");
}

sub class_label_plural {
    MT->translate("Configuration");
}

1;
__END__

=head1 NAME

MT::Config - Installation-wide configuration data.

=head1 AUTHOR & COPYRIGHT

Please see L<MT/AUTHOR & COPYRIGHT>.

=cut