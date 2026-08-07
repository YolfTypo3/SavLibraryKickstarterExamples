.. include:: ../../../../Includes.txt

.. _singleView.128029197:
.. role:: red

===========
Single view
===========


.. _singleView.128029197.128029197:

View ``Default``
================

This view contains the following configuration.


Selected Fields
---------------

.. _singleView.128029197.128029197.217895432.tx_savlibraryexample9.title:

.. card::
   :class: mb-md-2

  :Field: title

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _singleView.128029197.128029197.217895432.tx_savlibraryexample9.graph:

.. card::
   :class: mb-md-2

  :Field: graph

  :Type: :ref:`Graph <yolftypo3/sav-library-kickstarter:graph>`

  :Configuration:

  ::

    - cutlabel = 1
    - graphtemplate = EXT:sav_library_example9/Resources/Private/Templates/Charts.xml
    - allowqueries = 1
    - tags = marker#uidQueryGraph1 = 1,
       marker#uidQueryGraph2 = 2,
       marker#uidMainTable = ###uidMainTable###,