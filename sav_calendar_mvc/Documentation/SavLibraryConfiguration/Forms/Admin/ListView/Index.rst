.. include:: ../../../../Includes.txt

.. _listView.238747344:
.. role:: red

=========
List view
=========

The view ``Admin`` contains the following configuration.


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

.. _listView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.title:

.. card::
   :class: mb-md-2

  :Field: title

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

  :Configuration:

  ::

    - func = makeItemLink


.. _listView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.date_begin:

.. card::
   :class: mb-md-2

  :Field: date_begin

  :Type: :ref:`DateTime <yolftypo3/sav-library-kickstarter:dateAndTime>`

  :Configuration:

  ::

    - format = %A %d %B %Y - %Hh %M
    - func = makeDateFormat


.. _listView.238747344.238747344.217895432.tx_savcalendarmvc_domain_model_event.location:

.. card::
   :class: mb-md-2

  :Field: location

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`