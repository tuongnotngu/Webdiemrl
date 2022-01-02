#include <bits/stdc++.h>
using namespace std;

int n;
float a[1000];

bool fdaisy(int l, int b) {
    if (l == b) return true;
    float sum = 0;
    for (int i = l; i <= b; i++) sum += a[i];
    for (int i = l; i <= b; i++)
        if (a[i] == (sum / (b - l + 1))) return true;
    return false;
}

int main() {
    if (fopen("daisychains.inp", "r")) {
        freopen("daisychains.inp", "r", stdin);
        freopen("daisychains.out", "w", stdout);
    }

    cin >> n;

    for (int i = 1; i <= n; i++) cin >> a[i];

    int dem = 0;

    for (int i = 1; i <= n; i++) {
        for (int j = i; j <= n; j++) {
            if (fdaisy(i, j)) {
                dem++;
                //cout << "(" << i << "," << j << ")";
            }
        }
    }

    cout << dem << endl;
}
