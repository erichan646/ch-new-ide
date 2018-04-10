<!--
    Copyright (c) Codiad & Andr3as, distributed
    as-is and without warranty under the MIT License. 
    See http://opensource.org/licenses/MIT for more information. 
    This information must remain intact.
-->
<form id="hotkey">
    <?php
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = "show";
        }
        
        switch($action) {
            case "show":
                ?>
                    <label>Key Bindings</label>
                    <div id="hotkey_div">
                        <table id="hotkey_list">
                            <tr>
                                <td>Command Function</td>
                                <td>Win keybinding</td>
                                <td>Mac keybinging</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <button onclick="codiad.CodeSettings.add(); return false;">Add Key Binding</button>
                    <button onclick="codiad.CodeSettings.edit(); return false;">Expert Settings</button>
                    <button onclick="codiad.CodeSettings.help(); return false;">Help</button>
                    <script>
                        codiad.CodeSettings.show();
                    </script>
                <?php
                break;
            case "help":
                ?>
                    <label>Key Bindings - Help</label>
                    <table>
                        <tr>
                            <td>Command Function:</td>
                            <td>Name of the Command</td>
                        </tr>
                        <tr>
                            <td>Win/Mac Keybinding:</td>
                            <td>Keys given by its name divided by dash</td>
                        </tr>
                        <tr>
                            <td>Example:</td>
                            <td>Save  Ctrl-S</td>
                        </tr>
                    </table><button onclick="codiad.CodeSettings.showDialog(); return false;">Close</button>
                <?php
                break;
            default:
        }
    ?>
</form>