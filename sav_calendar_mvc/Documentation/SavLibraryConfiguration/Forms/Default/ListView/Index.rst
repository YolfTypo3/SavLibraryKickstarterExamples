.. include:: ../../../../Includes.txt

.. _listView.128029197:
.. role:: red

=========
List view
=========

The view ``Default`` contains the following configuration.


Item Template
=============

::

   <ul>
     <li class="title">###title###</li>
     <li class="date">###date_begin###</li>
     <li class="location">###location###</li>
   </ul>

Selected Fields
===============

.. _listView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.category:

.. card::
   :class: mb-md-2

  :Field: category

  :Type: :ref:`RelationOneToManyAsSelectorbox <yolftypo3/sav-library-kickstarter:relation_1_n>`

.. _listView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.title:

.. card::
   :class: mb-md-2

  :Field: title

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

  :Configuration:

  ::

    - func = makeItemLink


.. _listView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.date_begin:

.. card::
   :class: mb-md-2

  :Field: date_begin

  :Type: :ref:`DateTime <yolftypo3/sav-library-kickstarter:dateAndTime>`

  :Configuration:

  ::

    - format = %A %d %B %Y - %Hh %M
    - func = makeDateFormat


.. _listView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.date_end:

.. card::
   :class: mb-md-2

  :Field: date_end

  :Type: :ref:`DateTime <yolftypo3/sav-library-kickstarter:dateAndTime>`

.. _listView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.location:

.. card::
   :class: mb-md-2

  :Field: location

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`