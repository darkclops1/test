@extends('layouts.master')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
@section('content')


<div class="card">
  <div class="card-header">
    <h3 class="card-title">DataTable with default features</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Rendering engine</th>
          <th>Browser</th>
          <th>Platform(s)</th>
          <th>Engine version</th>
          <th>CSS grade</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Trident</td>
          <td>Internet Explorer 4.0</td>
          <td>Win95+</td>
          <td>4</td>
          <td>X</td>
        </tr>
        <tr>
          <td>Trident</td>
          <td>Internet Explorer 5.0</td>
          <td>Win95+</td>
          <td>5</td>
          <td>C</td>
        </tr>
        <tr>
          <td>Trident</td>
          <td>Internet Explorer 5.5</td>
          <td>Win95+</td>
          <td>5.5</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Trident</td>
          <td>Internet Explorer 6</td>
          <td>Win98+</td>
          <td>6</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Trident</td>
          <td>Internet Explorer 7</td>
          <td>WinXP SP2+</td>
          <td>7</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Trident</td>
          <td>AOL browser (AOL desktop)</td>
          <td>WinXP</td>
          <td>6</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Firefox 1.0</td>
          <td>Win98+/OSX.2+</td>
          <td>1.7</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Firefox 1.5</td>
          <td>Win98+/OSX.2+</td>
          <td>1.8</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Firefox 2.0</td>
          <td>Win98+/OSX.2+</td>
          <td>1.8</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Firefox 3.0</td>
          <td>Win2k+/OSX.3+</td>
          <td>1.9</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Camino 1.0</td>
          <td>OSX.2+</td>
          <td>1.8</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Camino1.5</td>
          <td>OSX.3+</td>
          <td>1.8</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Netscape7.2</td>
          <td>Win95+/MacOS8.6-9.2</td>
          <td>1.7</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>NetscapeBrowser8</td>
          <td>Win98SE+</td>
          <td>1.7</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>NetscapeNavigator9</td>
          <td>Win98+/OSX.2+</td>
          <td>1.8</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Mozilla1.0</td>
          <td>Win95+/OSX.1+</td>
          <td>1</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Mozilla1.1</td>
          <td>Win95+/OSX.1+</td>
          <td>1.1</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Mozilla1.2</td>
          <td>Win95+/OSX.1+</td>
          <td>1.2</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Mozilla1.3</td>
          <td>Win95+/OSX.1+</td>
          <td>1.3</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Mozilla1.4</td>
          <td>Win95+/OSX.1+</td>
          <td>1.4</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Mozilla1.5</td>
          <td>Win95+/OSX.1+</td>
          <td>1.5</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Mozilla1.6</td>
          <td>Win95+/OSX.1+</td>
          <td>1.6</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Mozilla1.7</td>
          <td>Win98+/OSX.1+</td>
          <td>1.7</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Mozilla1.8</td>
          <td>Win98+/OSX.1+</td>
          <td>1.8</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Seamonkey1.1</td>
          <td>Win98+/OSX.2+</td>
          <td>1.8</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Epiphany2.20</td>
          <td>Gnome</td>
          <td>1.8</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Webkit</td>
          <td>Safari 1.2</td>
          <td>OSX.3</td>
          <td>125.5</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Webkit</td>
          <td>Safari 1.3</td>
          <td>OSX.3</td>
          <td>312.8</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Webkit</td>
          <td>Safari2.0</td>
          <td>OSX.4+</td>
          <td>419.3</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Webkit</td>
          <td>Safari3.0</td>
          <td>OSX.4+</td>
          <td>522.1</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Webkit</td>
          <td>OmniWeb5.5</td>
          <td>OSX.4+</td>
          <td>420</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Webkit</td>
          <td>iPodTouch/iPhone</td>
          <td>iPod</td>
          <td>420.1</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Webkit</td>
          <td>S60</td>
          <td>S60</td>
          <td>413</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Presto</td>
          <td>Opera7.0</td>
          <td>Win95+/OSX.1+</td>
          <td>-</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Presto</td>
          <td>Opera7.5</td>
          <td>Win95+/OSX.2+</td>
          <td>-</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Presto</td>
          <td>Opera8.0</td>
          <td>Win95+/OSX.2+</td>
          <td>-</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Presto</td>
          <td>Opera8.5</td>
          <td>Win95+/OSX.2+</td>
          <td>-</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Presto</td>
          <td>Opera9.0</td>
          <td>Win95+/OSX.3+</td>
          <td>-</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Presto</td>
          <td>Opera9.2</td>
          <td>Win88+/OSX.3+</td>
          <td>-</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Presto</td>
          <td>Opera9.5</td>
          <td>Win88+/OSX.3+</td>
          <td>-</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Presto</td>
          <td>OperaforWii</td>
          <td>Wii</td>
          <td>-</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Presto</td>
          <td>NokiaN800</td>
          <td>N800</td>
          <td>-</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Presto</td>
          <td>NintendoDSbrowser</td>
          <td>NintendoDS</td>
          <td>8.5</td>
          <td>C/A<sup>1</sup></td>
        </tr>
        <tr>
          <td>KHTML</td>
          <td>Konqureror3.1</td>
          <td>KDE3.1</td>
          <td>3.1</td>
          <td>C</td>
        </tr>
        <tr>
          <td>KHTML</td>
          <td>Konqureror3.3</td>
          <td>KDE3.3</td>
          <td>3.3</td>
          <td>A</td>
        </tr>
        <tr>
          <td>KHTML</td>
          <td>Konqureror3.5</td>
          <td>KDE3.5</td>
          <td>3.5</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Tasman</td>
          <td>InternetExplorer4.5</td>
          <td>MacOS8-9</td>
          <td>-</td>
          <td>X</td>
        </tr>
        <tr>
          <td>Tasman</td>
          <td>InternetExplorer5.1</td>
          <td>MacOS7.6-9</td>
          <td>1</td>
          <td>C</td>
        </tr>
        <tr>
          <td>Tasman</td>
          <td>InternetExplorer5.2</td>
          <td>MacOS8-X</td>
          <td>1</td>
          <td>C</td>
        </tr>
        <tr>
          <td>Misc</td>
          <td>NetFront3.1</td>
          <td>Embeddeddevices</td>
          <td>-</td>
          <td>C</td>
        </tr>
        <tr>
          <td>Misc</td>
          <td>NetFront3.4</td>
          <td>Embeddeddevices</td>
          <td>-</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Misc</td>
          <td>Dillo0.8</td>
          <td>Embeddeddevices</td>
          <td>-</td>
          <td>X</td>
        </tr>
        <tr>
          <td>Misc</td>
          <td>Links</td>
          <td>Textonly</td>
          <td>-</td>
          <td>X</td>
        </tr>
        <tr>
          <td>Misc</td>
          <td>Lynx</td>
          <td>Textonly</td>
          <td>-</td>
          <td>X</td>
        </tr>
        <tr>
          <td>Misc</td>
          <td>IEMobile</td>
          <td>WindowsMobile6</td>
          <td>-</td>
          <td>C</td>
        </tr>
        <tr>
          <td>Misc</td>
          <td>PSPbrowser</td>
          <td>PSP</td>
          <td>-</td>
          <td>C</td>
        </tr>
        <tr>
          <td>Otherbrowsers</td>
          <td>Allothers</td>
          <td>-</td>
          <td>-</td>
          <td>U</td>
        </tr>
        <!-- Tambahkan baris lain sesuai dengan yang Anda inginkan -->
      </tbody>
      <tfoot>
        <tr>
          <th>Rendering engine</th>
          <th>Browser</th>
          <th>Platform(s)</th>
          <th>Engine version</th>
          <th>CSS grade</th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('#example1').DataTable({
            "responsive": true,
            "autoWidth": false,
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "pageLength": 10,  // Sesuaikan jumlah data per halaman
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json" // Untuk localization bahasa Indonesia
            }
        });
    });
</script>
@endsection
