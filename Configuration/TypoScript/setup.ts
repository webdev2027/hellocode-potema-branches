
plugin.tx_hellocodepotemabranches_potemaserviceprovider {
  view {
    templateRootPaths.0 = EXT:hellocode_potema_branches/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_hellocodepotemabranches_potemaserviceprovider.view.templateRootPath}
    partialRootPaths.0 = EXT:hellocode_potema_branches/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_hellocodepotemabranches_potemaserviceprovider.view.partialRootPath}
    layoutRootPaths.0 = EXT:hellocode_potema_branches/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_hellocodepotemabranches_potemaserviceprovider.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_hellocodepotemabranches_potemaserviceprovider.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}




page {
  includeJSFooter {

    ext_googlemaps_api = https://maps.googleapis.com/maps/api/js?key={$plugin.tx_hellocodepotemabranches_potemaserviceprovider.settings.googleApi}&callback=initMap
    #ext_googlemaps_api = https://maps.googleapis.com/maps/api/js?key=AIzaSyAAc0TCsUTAQ7UiXN8k9b2iJ_5wfF2vTXY&callback=initMap
    ext_googlemaps_api {
      async = 1
      external = 1
      disableCompression = 1
      excludeFromConcatenation = 1
    }

    ext_script = EXT:hellocode_potema_branches/Resources/Public/JavaScript/serviceprovider.js

  }
}

plugin.tx_hellocodepotemabranches._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-hellocode-potema-branches table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-hellocode-potema-branches table th {
        font-weight:bold;
    }

    .tx-hellocode-potema-branches table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
