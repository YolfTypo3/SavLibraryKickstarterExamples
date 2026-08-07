.. include:: ../../../../Includes.txt

.. _singleView.97071888:
.. role:: red

===========
Single view
===========


.. _singleView.97071888.107716962:

View ``Single``
===============

This view contains the following configuration.


Selected Fields
---------------

.. _singleView.97071888.107716962.217895432.tx_savlibraryexample10.image:

.. card::
   :class: mb-md-2

  :Field: image

  :Type: :ref:`Files <yolftypo3/sav-library-kickstarter:filesAndImages>`

  :Configuration:

  ::

    - wrapitem = <div class="container"><div class="image"> | </div>
    - cutlabel = 1
    - tsproperties = file.width = 300


.. _singleView.97071888.107716962.217895432.tx_savlibraryexample10.poi:

.. card::
   :class: mb-md-2

  :Field: poi

  :Type: :ref:`RelationManyToManyAsSubform <yolftypo3/sav-library-kickstarter:relation_n_n>`

  :Configuration:

  ::

    - cutlabel = 1
    - wrapitem = <div class="info"><div class="name"> | </div>

  .. card:: Subform Content

   
   .. card::
      :class: mb-md-2
   
     :Field: title
   
     :Type: :ref:`ShowOnly <yolftypo3/sav-library-kickstarter:showOnly>`
   
     :Configuration:
   
     ::
   
       - cutlabel = 1
   
   



.. _singleView.97071888.107716962.217895432.tx_savlibraryexample10.description:

.. card::
   :class: mb-md-2

  :Field: description

  :Type: :ref:`Text <yolftypo3/sav-library-kickstarter:textarea>`

  :Configuration:

  ::

    - wrapitem = <div class="description"> | </div></div>


.. _singleView.97071888.107716962.217895432.tx_savlibraryexample10.poi_uid:

.. card::
   :class: mb-md-2

  :Field: poi_uid

  :Type: :ref:`ShowOnly <yolftypo3/sav-library-kickstarter:showOnly>`

  :Configuration:

  ::

    - cutif = true
    - tsobject = CONTENT
    - tsproperties = table = tx_maps2_domain_model_poicollection
       select {
         pidInList = ###storagePage###
         join = tx_savlibraryexample10_poi_mm ON tx_maps2_domain_model_poicollection.uid = tx_savlibraryexample10_poi_mm.uid_foreign
         selectFields = tx_maps2_domain_model_poicollection.uid
         where = uid_local = ###uidMainTable###
         }
     renderObj = TEXT
     renderObj.field = uid
    - renderfieldinmarker = poi_uid


.. _singleView.97071888.107716962.217895432.tx_savlibraryexample10.map:

.. card::
   :class: mb-md-2

  :Field: map

  :Type: :ref:`ShowOnly <yolftypo3/sav-library-kickstarter:showOnly>`

  :Configuration:

  ::

    - wrapitem = <div class="map"> | </div></div>
    - cutlabel = 1
    - tsobject = EXTBASEPLUGIN
    - tsproperties = extensionName = Maps2
         pluginName = Maps2
         persistence.storagePid = ###storagePage###
         settings < plugin.tx_maps2.settings
         settings {
            openStreetMapGeocodeUri = https://nominatim.openstreetmap.org
            zoom = 18
            mapProvider = osm
            poiCollection = ###poi_uid###
            categories =
            mapWidth = 100%
            mapHeight = 300
         }
    - showif = 0 < ###poi_uid###