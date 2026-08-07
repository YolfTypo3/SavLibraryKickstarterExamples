.. include:: ../../../../Includes.txt

.. _listView.92691674:
.. role:: red

=========
List view
=========

The view ``List`` contains the following configuration.

Title Bar
=========

::

   $$$formTitle$$$

Item Template
=============

::

   <ul>
     <li class="artist">###artist###</li>
     <li class="title">###album_title###</li>
     <li class="date">###date_of_purchase###</li>
     <li class="category">###category###</li>
     <li class="image">###coverimage###</li>
   </ul>

Selected Fields
===============

.. _listView.92691674.82717130.217895432.tx_savlibraryexample3_cds.artist:

.. card::
   :class: mb-md-2

  :Field: artist

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

  :Configuration:

  ::

    - func = makeItemLink


.. _listView.92691674.82717130.217895432.tx_savlibraryexample3_cds.album_title:

.. card::
   :class: mb-md-2

  :Field: album_title

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _listView.92691674.82717130.217895432.tx_savlibraryexample3_cds.date_of_purchase:

.. card::
   :class: mb-md-2

  :Field: date_of_purchase

  :Type: :ref:`Date <yolftypo3/sav-library-kickstarter:date>`

.. _listView.92691674.82717130.217895432.tx_savlibraryexample3_cds.coverimage:

.. card::
   :class: mb-md-2

  :Field: coverimage

  :Type: :ref:`Files <yolftypo3/sav-library-kickstarter:filesAndImages>`

  :Configuration:

  ::

    - width = 70
    - height = 70
    - func = makeNewWindowLink


.. _listView.92691674.82717130.217895432.tx_savlibraryexample3_cds.category:

.. card::
   :class: mb-md-2

  :Field: category

  :Type: :ref:`RelationOneToManyAsSelectorbox <yolftypo3/sav-library-kickstarter:relation_1_n>`