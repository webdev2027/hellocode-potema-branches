
plugin.tx_hellocodepotemabranches_potemaserviceprovider {
  view {
    # cat=plugin.tx_hellocodepotemabranches_potemaserviceprovider/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:hellocode_potema_branches/Resources/Private/Templates/
    # cat=plugin.tx_hellocodepotemabranches_potemaserviceprovider/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:hellocode_potema_branches/Resources/Private/Partials/
    # cat=plugin.tx_hellocodepotemabranches_potemaserviceprovider/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:hellocode_potema_branches/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_hellocodepotemabranches_potemaserviceprovider//a; type=string; label=Default storage PID
    storagePid =
  }
  settings {
    # cat=plugin.tx_hellocodepotemabranches_potemaserviceprovider/file; type=string; label=Google Maps API key
    googleApi = AIzaSyAAc0TCsUTAQ7UiXN8k9b2iJ_5wfF2vTXY
  }
}
