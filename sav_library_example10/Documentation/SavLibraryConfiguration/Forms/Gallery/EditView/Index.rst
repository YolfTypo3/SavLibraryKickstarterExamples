.. include:: ../../../../Includes.txt

.. _editView.97071888:
.. role:: red

=========
Edit view
=========


.. _editView.97071888.131916066:

View ``Edit``
=============

This view contains the following configuration.


Selected Fields
---------------

.. _editView.97071888.131916066.217895432.tx_savlibraryexample10.image:

.. card::
   :class: mb-md-2

  :Field: image

  :Type: :ref:`Files <yolftypo3/sav-library-kickstarter:filesAndImages>`

.. _editView.97071888.131916066.217895432.tx_savlibraryexample10.description:

.. card::
   :class: mb-md-2

  :Field: description

  :Type: :ref:`Text <yolftypo3/sav-library-kickstarter:textarea>`

.. _editView.97071888.131916066.217895432.tx_savlibraryexample10.poi:

.. card::
   :class: mb-md-2

  :Field: poi

  :Type: :ref:`RelationManyToManyAsSubform <yolftypo3/sav-library-kickstarter:relation_n_n>`



  .. card:: Subform Content

   
   .. card::
      :class: mb-md-2
   
     :Field: title
   
     :Type: :ref:`ShowOnly <yolftypo3/sav-library-kickstarter:showOnly>`
   
     :Configuration:
   
     ::
   
       - updateshowonlyfield = 1
   
   
   
   .. card::
      :class: mb-md-2
   
     :Field: latitude
   
     :Type: :ref:`ShowOnly <yolftypo3/sav-library-kickstarter:showOnly>`
   
     :Configuration:
   
     ::
   
       - updateshowonlyfield = 1
   
   
   
   .. card::
      :class: mb-md-2
   
     :Field: longitude
   
     :Type: :ref:`ShowOnly <yolftypo3/sav-library-kickstarter:showOnly>`
   
     :Configuration:
   
     ::
   
       - updateshowonlyfield = 1
   
   
   
   .. card::
      :class: mb-md-2
   
     :Field: map_provider
   
     :Type: :ref:`ShowOnly <yolftypo3/sav-library-kickstarter:showOnly>`
   
     :Configuration:
   
     ::
   
       - updateshowonlyfield = 1
       - value = osm
   
   
   
   .. card::
      :class: mb-md-2
   
     :Field: configuration_map
   
     :Type: :ref:`ShowOnly <yolftypo3/sav-library-kickstarter:showOnly>`
   
     :Configuration:
   
     ::
   
       - updateshowonlyfield = 1
       - value = Point