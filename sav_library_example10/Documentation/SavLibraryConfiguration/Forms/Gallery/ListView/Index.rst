.. include:: ../../../../Includes.txt

.. _listView.97071888:
.. role:: red

=========
List view
=========

The view ``List`` contains the following configuration.


Item Template
=============

::

   <ul>
     <li class="image">###image###</li>
   </ul>

Selected Fields
===============

.. _listView.97071888.82717130.217895432.tx_savlibraryexample10.image:

.. card::
   :class: mb-md-2

  :Field: image

  :Type: :ref:`Files <yolftypo3/sav-library-kickstarter:filesAndImages>`

  :Configuration:

  ::

    - func = makeItemLink
    - tsproperties = file.width= 100