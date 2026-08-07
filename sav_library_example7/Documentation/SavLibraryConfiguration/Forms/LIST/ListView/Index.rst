.. include:: ../../../../Includes.txt

.. _listView.43567909:
.. role:: red

=========
List view
=========

The view ``LIST_All`` contains the following configuration.


Item Template
=============

::

   <div class="name">###firstname### ###lastname### - <span class="date">###date###</span></div>
   <div class="colLeft">
     <div class="email">###email###</div>
     <div class="website">###website###</div>
   </div>
   <div class="colRight">
     <div class="message">###message###</div>
     <div class="comment">###comment###</div>
   </div>

Selected Fields
===============

.. _listView.43567909.250114320.217895432.tx_savlibraryexample7_guests.firstname:

.. card::
   :class: mb-md-2

  :Field: firstname

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _listView.43567909.250114320.217895432.tx_savlibraryexample7_guests.lastname:

.. card::
   :class: mb-md-2

  :Field: lastname

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _listView.43567909.250114320.217895432.tx_savlibraryexample7_guests.email:

.. card::
   :class: mb-md-2

  :Field: email

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

  :Configuration:

  ::

    - func = makeEmailLink
    - message = $$$email$$$


.. _listView.43567909.250114320.217895432.tx_savlibraryexample7_guests.website:

.. card::
   :class: mb-md-2

  :Field: website

  :Type: :ref:`Link <yolftypo3/sav-library-kickstarter:link>`

  :Configuration:

  ::

    - message = $$$website$$$
    - cutifnull = 1


.. _listView.43567909.250114320.217895432.tx_savlibraryexample7_guests.message:

.. card::
   :class: mb-md-2

  :Field: message

  :Type: :ref:`Text <yolftypo3/sav-library-kickstarter:textarea>`

.. _listView.43567909.250114320.217895432.tx_savlibraryexample7_guests.comment:

.. card::
   :class: mb-md-2

  :Field: comment

  :Type: :ref:`Text <yolftypo3/sav-library-kickstarter:textarea>`

  :Configuration:

  ::

    - addleftifnotnull = <strong>$$$label[comment]$$$</strong><br />
    - cutifnull = 1


.. _listView.43567909.250114320.217895432.tx_savlibraryexample7_guests.date:

.. card::
   :class: mb-md-2

  :Field: date

  :Type: :ref:`ShowOnly <yolftypo3/sav-library-kickstarter:showOnly>`

  :Configuration:

  ::

    - alias = crdate