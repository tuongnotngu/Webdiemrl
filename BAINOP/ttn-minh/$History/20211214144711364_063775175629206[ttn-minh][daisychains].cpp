#include <bits/stdc++.h>
#define lli long long int
using namespace std;

lli n;
lli a[2*(lli)1e5];

bool fdaisy(lli l, lli b, lli k) {
    for (lli i = l; i <= b; i++) {
        if (a[i] == k) return true;
    }
    return false;
}

int main() {
    if (fopen("daisychains.inp", "r")) {
        freopen("daisychains.inp", "r", stdin);
        freopen("daisychains.out", "w", stdout);
    }

    cin >> n;

    for (lli i = 0; i < n; i++) cin >> a[i];

    lli dem = 0;

    for (lli i = 0; i < (n - 1); i++) {
        for (lli j = i + 1; j < n; j++) {
            if (fdaisy(i, j, (a[i] + a[j])/2)) dem++;
        }
    }

    cout << dem << endl;
}
