.. include:: ../../../../Includes.txt

.. _listView.157862678:
.. role:: red

=========
List view
=========

The view ``TEASER_All`` contains the following configuration.

Title Bar
=========

::

   $$$lastEntries$$$

Item Template
=============

::

   <div class="name">###firstname### ###lastname### - <span class="date">###date###</span></div>
   <div class="message">###message###</div>

Selected Fields
===============

.. _listView.157862678.125874590.217895432.tx_savlibraryexample7_guests.firstname:

.. card::
   :class: mb-md-2

  :Field: firstname

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _listView.157862678.125874590.217895432.tx_savlibraryexample7_guests.lastname:

.. card::
   :class: mb-md-2

  :Field: lastname

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _listView.157862678.125874590.217895432.tx_savlibraryexample7_guests.message:

.. card::
   :class: mb-md-2

  :Field: message

  :Type: :ref:`Text <yolftypo3/sav-library-kickstarter:textarea>`

  :Configuration:

  ::

    - stdwrapvalue = crop = 60|...
    - addrightifnotnull = $$$more$$$
    - funcright = makeLink
    - setuidright = 123


.. _listView.157862678.125874590.217895432.tx_savlibraryexample7_guests.date:

.. card::
   :class: mb-md-2

  :Field: date

  :Type: :ref:`ShowOnly <yolftypo3/sav-library-kickstarter:showOnly>`

  :Configuration:

  ::

    - alias = crdate